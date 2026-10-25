<?php
/**
 * Zia Ul Ain Portfolio - AI Assistant Chatbot Widget & UI
 * Powered by Groq API (openai/gpt-oss-120b with fallback)
 */
?>
<!-- Chatbot Floating Launcher Button -->
<div id="aiChatWidget" class="ai-chat-widget">
  
  <!-- Floating Callout Tooltip Pill -->
  <div class="ai-chat-tooltip" id="aiChatTooltip">
    <span class="sparkle-icon">✨</span>
    <span>Ask Zia Ul Ain's AI (English / اردو)</span>
    <button type="button" class="tooltip-close-btn" id="tooltipCloseBtn" aria-label="Close tooltip">&times;</button>
  </div>

  <!-- Main Floating Toggle Button -->
  <button type="button" class="ai-chat-launcher" id="aiChatLauncher" aria-label="Open Zia Ul Ain AI Assistant">
    <div class="launcher-aura"></div>
    <span class="launcher-online-dot"></span>
    <i class="bi bi-robot launcher-icon-open"></i>
    <i class="bi bi-x-lg launcher-icon-close d-none"></i>
  </button>

  <!-- Chatbot Main Window Modal -->
  <div class="ai-chat-window" id="aiChatWindow" role="dialog" aria-labelledby="chatHeaderTitle" aria-hidden="true">
    
    <!-- Window Header -->
    <div class="ai-chat-header d-flex align-items-center justify-content-between p-3">
      <div class="d-flex align-items-center gap-2.5 min-w-0">
        <div class="chat-avatar-wrap position-relative">
          <div class="chat-avatar-circle">
            <i class="bi bi-robot"></i>
          </div>
          <span class="avatar-status-dot"></span>
        </div>
        <div class="min-w-0">
          <h4 class="chat-header-title mb-0 text-truncate" id="chatHeaderTitle">Zia Ul Ain AI</h4>
          <span class="chat-header-sub d-block text-truncate">
            <span class="badge-online">Online</span> &bull; Groq 120B &bull; EN / اردو
          </span>
        </div>
      </div>

      <!-- Header Action Controls -->
      <div class="d-flex align-items-center gap-1">
        <button type="button" class="chat-control-btn" id="chatClearBtn" title="Clear Conversation" aria-label="Clear Chat">
          <i class="bi bi-trash3"></i>
        </button>
        <button type="button" class="chat-control-btn" id="chatMinimizeBtn" title="Close" aria-label="Close Chat">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>
    </div>

    <!-- Messages Container -->
    <div class="ai-chat-body p-3" id="aiChatBody">
      
      <!-- Welcome Message & Suggested Prompts -->
      <div class="chat-welcome-card p-3 rounded-4 mb-3 border">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="badge bg-primary-subtle text-primary rounded-pill px-2.5 py-1 small fw-semibold">
            <i class="bi bi-stars me-1"></i> Portfolio Assistant
          </span>
          <span class="badge bg-light text-secondary border rounded-pill px-2 py-0.5" style="font-size: 0.68rem;">
            Multilingual
          </span>
        </div>
        <h5 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Hello! I'm Zia Ul Ain's AI Assistant.</h5>
        <p class="text-muted small mb-2" style="font-size: 0.8rem; line-height: 1.45;">
          Ask me about Zia Ul Ain's Full-Stack Web Development, Machine Learning, 20 Coursera certifications, or hiring availability.
        </p>
        <p class="urdu-greeting text-secondary mb-3 small" dir="rtl" style="font-size: 0.84rem; line-height: 1.6;">
          آپ مجھ سے اردو میں بھی سوال پوچھ سکتے ہیں!
        </p>

        <!-- Quick Prompt Chips -->
        <div class="chat-prompt-chips d-flex flex-wrap gap-1.5">
          <button type="button" class="chat-chip-btn" data-prompt="What are Zia Ul Ain's core skills and technologies?">
            💻 Core Tech Stack
          </button>
          <button type="button" class="chat-chip-btn" data-prompt="Tell me about Zia Ul Ain's 20 Coursera certifications and specializations.">
            🏆 Certifications
          </button>
          <button type="button" class="chat-chip-btn" data-prompt="Is Zia Ul Ain available for freelance projects or hiring?">
            💼 Hire Zia Ul Ain
          </button>
          <button type="button" class="chat-chip-btn chip-urdu" data-prompt="ضیاء العین کی مہارتیں اور تجربہ کیا ہے؟ مختصر بتائیں۔">
            🇵🇰 ضیاء العین کی مہارتیں (Urdu)
          </button>
        </div>
      </div>

      <!-- Dynamic Message Stream -->
      <div id="chatMessagesStream" class="d-flex flex-column gap-3"></div>

      <!-- Typing Indicator -->
      <div id="chatTypingIndicator" class="chat-message bot-message d-none">
        <div class="message-avatar">
          <i class="bi bi-robot"></i>
        </div>
        <div class="typing-bubble">
          <span class="typing-dot"></span>
          <span class="typing-dot"></span>
          <span class="typing-dot"></span>
        </div>
      </div>

    </div>

    <!-- Window Footer Input Bar -->
    <div class="ai-chat-footer p-2.5 border-top bg-white">
      <form id="aiChatForm" class="d-flex align-items-center gap-2">
        <div class="input-wrapper position-relative flex-grow-1">
          <textarea id="aiChatInput" class="form-control chat-input" rows="1" placeholder="Ask a question in English or اردو..." maxlength="1000" autocomplete="off"></textarea>
        </div>
        <button type="submit" class="btn btn-primary chat-send-btn" id="aiChatSendBtn" aria-label="Send Message" disabled>
          <i class="bi bi-send-fill"></i>
        </button>
      </form>
      <div class="chat-footer-brand d-flex align-items-center justify-content-between px-1 mt-1.5">
        <span class="text-muted" style="font-size: 0.68rem;">
          <i class="bi bi-lightning-charge-fill text-warning me-0.5"></i> Groq <code>gpt-oss-120b</code>
        </span>
        <span class="text-muted" style="font-size: 0.68rem;">English &bull; اردو &bull; Roman Urdu</span>
      </div>
    </div>

  </div>
</div>
