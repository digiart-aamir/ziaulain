/**
 * Zia Ul Ain Portfolio - Luxury AI Chatbot Frontend Controller
 * Powered by Groq API (openai/gpt-oss-120b with fallback)
 */

(function () {
  'use strict';

  // DOM Elements
  const widget = document.getElementById('aiChatWidget');
  if (!widget) return;

  const launcher = document.getElementById('aiChatLauncher');
  const tooltip = document.getElementById('aiChatTooltip');
  const tooltipClose = document.getElementById('tooltipCloseBtn');
  const chatWindow = document.getElementById('aiChatWindow');
  const minimizeBtn = document.getElementById('chatMinimizeBtn');
  const clearBtn = document.getElementById('chatClearBtn');
  const chatBody = document.getElementById('aiChatBody');
  const messagesStream = document.getElementById('chatMessagesStream');
  const typingIndicator = document.getElementById('chatTypingIndicator');
  const form = document.getElementById('aiChatForm');
  const input = document.getElementById('aiChatInput');
  const sendBtn = document.getElementById('aiChatSendBtn');
  const chipButtons = document.querySelectorAll('.chat-chip-btn');

  // State
  let isOpen = false;
  let isSending = false;
  let chatHistory = []; // array of {role, content}

  // Regex for Urdu / Arabic character detection
  const urduRegex = /[\u0600-\u06FF\u0750-\u077F\uFB50-\uFDFF\uFE70-\uFEFF]/;

  // Check if string contains Urdu characters
  function isUrduText(text) {
    if (!text) return false;
    // Count Urdu characters vs total letters
    const matches = text.match(urduRegex);
    return matches && matches.length > 0;
  }

  // Initialize marked options if marked.js is loaded
  if (typeof marked !== 'undefined') {
    marked.setOptions({
      gfm: true,
      breaks: true,
      sanitize: false
    });
  }

  // Toggle Chat Window
  function toggleChat(forceState) {
    isOpen = typeof forceState === 'boolean' ? forceState : !isOpen;

    if (isOpen) {
      chatWindow.classList.add('chat-active');
      chatWindow.setAttribute('aria-hidden', 'false');
      launcher.querySelector('.launcher-icon-open')?.classList.add('d-none');
      launcher.querySelector('.launcher-icon-close')?.classList.remove('d-none');
      if (tooltip) {
        tooltip.style.opacity = '0';
        tooltip.style.pointerEvents = 'none';
      }
      setTimeout(() => {
        input?.focus();
        scrollToBottom();
      }, 150);
    } else {
      chatWindow.classList.remove('chat-active');
      chatWindow.setAttribute('aria-hidden', 'true');
      launcher.querySelector('.launcher-icon-open')?.classList.remove('d-none');
      launcher.querySelector('.launcher-icon-close')?.classList.add('d-none');
    }
  }

  // Auto-scroll chat body to bottom
  function scrollToBottom() {
    if (!chatBody) return;
    chatBody.scrollTo({
      top: chatBody.scrollHeight,
      behavior: 'smooth'
    });
  }

  // Auto-resize input textarea
  function autoResizeInput() {
    if (!input) return;
    input.style.height = 'auto';
    const newHeight = Math.min(input.scrollHeight, 100);
    input.style.height = newHeight + 'px';
    
    // Toggle send button enabled state
    const hasText = input.value.trim().length > 0;
    if (sendBtn) {
      sendBtn.disabled = !hasText || isSending;
    }
  }

  // Render Markdown safely and decorate Code Blocks with Copy Buttons
  function renderMarkdown(rawText) {
    let html = '';
    if (typeof marked !== 'undefined') {
      html = marked.parse(rawText);
    } else {
      // Fallback simple line break formatter
      html = rawText
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/\n/g, '<br>');
    }

    // Sanitize with DOMPurify if available
    if (typeof DOMPurify !== 'undefined') {
      html = DOMPurify.sanitize(html, {
        ADD_ATTR: ['target', 'dir']
      });
    }

    // Wrap pre/code blocks with container, header, and copy button
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = html;

    const preElements = tempDiv.querySelectorAll('pre');
    preElements.forEach((pre) => {
      const code = pre.querySelector('code');
      const langClass = code ? code.className : '';
      let lang = 'code';
      const langMatch = langClass.match(/language-(\w+)/);
      if (langMatch) {
        lang = langMatch[1];
      }

      const wrapper = document.createElement('div');
      wrapper.className = 'code-block-wrapper';

      const header = document.createElement('div');
      header.className = 'code-block-header';
      header.innerHTML = `
        <span><i class="bi bi-code-slash me-1"></i>${lang}</span>
        <button type="button" class="code-copy-btn">
          <i class="bi bi-clipboard"></i> Copy
        </button>
      `;

      pre.parentNode.insertBefore(wrapper, pre);
      wrapper.appendChild(header);
      wrapper.appendChild(pre);

      // Attach copy handler
      const copyBtn = header.querySelector('.code-copy-btn');
      copyBtn.addEventListener('click', function () {
        const textToCopy = code ? code.innerText : pre.innerText;
        navigator.clipboard.writeText(textToCopy).then(() => {
          copyBtn.classList.add('copied');
          copyBtn.innerHTML = '<i class="bi bi-check-lg"></i> Copied!';
          setTimeout(() => {
            copyBtn.classList.remove('copied');
            copyBtn.innerHTML = '<i class="bi bi-clipboard"></i> Copy';
          }, 2000);
        }).catch(err => {
          console.error('Copy failed:', err);
        });
      });
    });

    // Make all external links open in a new tab
    const links = tempDiv.querySelectorAll('a');
    links.forEach(a => {
      a.setAttribute('target', '_blank');
      a.setAttribute('rel', 'noopener noreferrer');
    });

    return tempDiv.innerHTML;
  }

  // Append a message bubble to the stream
  function appendMessage(role, text) {
    if (!messagesStream) return;

    const isBot = role === 'assistant' || role === 'bot';
    const isUrdu = isUrduText(text);

    const msgRow = document.createElement('div');
    msgRow.className = `chat-message ${isBot ? 'bot-message' : 'user-message'}`;
    if (isUrdu) {
      msgRow.classList.add('is-urdu');
    }

    if (isBot) {
      const avatar = document.createElement('div');
      avatar.className = 'message-avatar';
      avatar.innerHTML = '<i class="bi bi-robot"></i>';
      msgRow.appendChild(avatar);

      const bubble = document.createElement('div');
      bubble.className = 'message-bubble';
      if (isUrdu) {
        bubble.setAttribute('dir', 'rtl');
      }
      bubble.innerHTML = renderMarkdown(text);
      msgRow.appendChild(bubble);
    } else {
      const bubble = document.createElement('div');
      bubble.className = 'message-bubble';
      if (isUrdu) {
        bubble.setAttribute('dir', 'rtl');
      }
      // User message is plain text for security & accuracy
      bubble.textContent = text;
      msgRow.appendChild(bubble);
    }

    messagesStream.appendChild(msgRow);
    scrollToBottom();
  }

  // Send Message Flow
  async function handleSendMessage(messageText) {
    const text = (messageText || input.value || '').trim();
    if (!text || isSending) return;

    // Reset input
    input.value = '';
    autoResizeInput();
    isSending = true;
    if (sendBtn) sendBtn.disabled = true;

    // Append User Message to UI
    appendMessage('user', text);

    // Save to local conversation history
    chatHistory.push({ role: 'user', content: text });

    // Show typing indicator
    if (typingIndicator) {
      typingIndicator.classList.remove('d-none');
      scrollToBottom();
    }

    try {
      // Send only recent turns to save tokens & respect limits
      const recentHistory = chatHistory.slice(-6);

      const response = await fetch('api/chat.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify({
          message: text,
          history: recentHistory
        })
      });

      const data = await response.json();

      // Hide typing indicator
      if (typingIndicator) {
        typingIndicator.classList.add('d-none');
      }

      if (data && data.success && data.reply) {
        appendMessage('assistant', data.reply);
        chatHistory.push({ role: 'assistant', content: data.reply });
      } else {
        const errorMsg = (data && data.error) ? data.error : 'Sorry, I encountered an issue. Please try again.';
        appendMessage('assistant', `⚠️ **Error:** ${errorMsg}\n\nPlease try again or contact Zia Ul Ain directly via WhatsApp (+92 311 5912874).`);
      }
    } catch (err) {
      console.error('Chatbot API fetch error:', err);
      if (typingIndicator) {
        typingIndicator.classList.add('d-none');
      }
      appendMessage('assistant', '⚠️ Unable to connect to the assistant server right now. Please check your internet connection or reach out to Zia Ul Ain at **zziaulain@gmail.com**.');
    } finally {
      isSending = false;
      autoResizeInput();
    }
  }

  // Event Listeners

  // 1. Launcher Click
  launcher?.addEventListener('click', function (e) {
    e.stopPropagation();
    toggleChat();
  });

  // 2. Minimize / Close Button
  minimizeBtn?.addEventListener('click', function () {
    toggleChat(false);
  });

  // 3. Clear Chat Button
  clearBtn?.addEventListener('click', function () {
    if (confirm('Clear this chat conversation?')) {
      if (messagesStream) messagesStream.innerHTML = '';
      chatHistory = [];
    }
  });

  // 4. Form Submit
  form?.addEventListener('submit', function (e) {
    e.preventDefault();
    handleSendMessage();
  });

  // 5. Textarea Enter Key handler (Shift+Enter for newline)
  input?.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' && !e.shiftKey) {
      e.preventDefault();
      handleSendMessage();
    }
  });

  // 6. Textarea Input resize
  input?.addEventListener('input', autoResizeInput);

  // 7. Quick prompt chips
  chipButtons.forEach((btn) => {
    btn.addEventListener('click', function () {
      const prompt = btn.getAttribute('data-prompt');
      if (prompt) {
        handleSendMessage(prompt);
      }
    });
  });

  // 8. Tooltip Dismiss Button
  tooltipClose?.addEventListener('click', function (e) {
    e.stopPropagation();
    if (tooltip) {
      tooltip.style.display = 'none';
      try {
        localStorage.setItem('ziaulain_chat_tooltip_closed', 'true');
      } catch (err) {}
    }
  });

  // Tooltip check saved state
  try {
    if (localStorage.getItem('ziaulain_chat_tooltip_closed') === 'true' && tooltip) {
      tooltip.style.display = 'none';
    }
  } catch (err) {}

  // 9. Close when clicking outside on mobile or backdrop
  document.addEventListener('click', function (e) {
    if (isOpen && !widget.contains(e.target)) {
      toggleChat(false);
    }
  });

  // 10. Escape key closes chat
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && isOpen) {
      toggleChat(false);
    }
  });

})();
