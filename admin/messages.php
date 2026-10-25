<?php
/**
 * Zero-DB Contact Messages Manager
 * Zia Ul Ain Portfolio Portal
 */

require_once dirname(__DIR__) . '/includes/config.php';

$dataFile = dirname(__DIR__) . '/data/messages.json';
$notice = '';

// Handle Delete Action
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'delete' && !empty($_POST['id'])) {
        $deleteId = $_POST['id'];
        if (file_exists($dataFile)) {
            $current = json_decode(file_get_contents($dataFile), true) ?: [];
            $filtered = array_values(array_filter($current, function($item) use ($deleteId) {
                return ($item['id'] ?? '') !== $deleteId;
            }));
            file_put_contents($dataFile, json_encode($filtered, JSON_PRETTY_PRINT));
            $notice = 'Message deleted successfully.';
        }
    } elseif ($_POST['action'] === 'clear_all') {
        file_put_contents($dataFile, json_encode([]));
        $notice = 'All messages cleared.';
    } elseif ($_POST['action'] === 'send_test') {
        $testRecord = [
            'id' => uniqid('msg_', true),
            'name' => 'Demo Client',
            'email' => 'client@example.com',
            'subject' => 'Web Development & Machine Learning Project Inquiry',
            'message' => 'Hello Zia Ul Ain, I reviewed your impressive portfolio and would like to consult with you on an upcoming web and data science project.',
            'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1',
            'created_at' => date('Y-m-d H:i:s')
        ];
        $current = file_exists($dataFile) ? (json_decode(file_get_contents($dataFile), true) ?: []) : [];
        array_unshift($current, $testRecord);
        file_put_contents($dataFile, json_encode($current, JSON_PRETTY_PRINT));
        $notice = 'Test message created successfully.';
    }
}

// Read Messages
$messages = [];
if (file_exists($dataFile)) {
    $messages = json_decode(file_get_contents($dataFile), true) ?: [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inquiry Messages Portal | <?= e(SITE_NAME) ?></title>
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f6f9;
      color: #333;
    }
    .header-bar {
      background: #0563bb;
      color: white;
      padding: 1.2rem 0;
      margin-bottom: 2rem;
      box-shadow: 0 4px 12px rgba(5, 99, 187, 0.15);
    }
    .card-message {
      transition: transform 0.2s;
      border: none;
      border-left: 4px solid #0563bb;
    }
    .card-message:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    }
  </style>
</head>
<body>

  <div class="header-bar">
    <div class="container d-flex justify-content-between align-items-center">
      <div>
        <h4 class="mb-0 fw-bold"><i class="bi bi-inbox-fill me-2"></i>Contact Inquiries Portal</h4>
        <small class="text-white-50">Portfolio Management Dashboard (Zero-DB File Mode)</small>
      </div>
      <div>
        <a href="../index.php" class="btn btn-outline-light btn-sm"><i class="bi bi-house me-1"></i> Visit Website</a>
      </div>
    </div>
  </div>

  <div class="container pb-5">
    <?php if ($notice): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i><?= e($notice) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    <?php endif; ?>

    <!-- Summary Stats Bar -->
    <div class="row g-3 mb-4">
      <div class="col-md-4">
        <div class="card shadow-sm border-0 p-3 bg-white">
          <div class="d-flex align-items-center">
            <div class="p-3 bg-primary bg-opacity-10 rounded-circle text-primary me-3">
              <i class="bi bi-envelope-open fs-3"></i>
            </div>
            <div>
              <h6 class="text-muted mb-0">Total Inquiries</h6>
              <h3 class="fw-bold mb-0"><?= count($messages) ?></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm border-0 p-3 bg-white">
          <div class="d-flex align-items-center">
            <div class="p-3 bg-success bg-opacity-10 rounded-circle text-success me-3">
              <i class="bi bi-clock-history fs-3"></i>
            </div>
            <div>
              <h6 class="text-muted mb-0">Latest Message</h6>
              <h6 class="fw-bold mb-0 text-dark"><?= !empty($messages) ? e($messages[0]['created_at']) : 'None yet' ?></h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-end gap-2">
        <form method="post" class="d-inline">
          <input type="hidden" name="action" value="send_test">
          <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-plus-circle me-1"></i> Add Test Message</button>
        </form>
        <?php if (!empty($messages)): ?>
          <form method="post" class="d-inline" onsubmit="return confirm('Clear all messages permanently?');">
            <input type="hidden" name="action" value="clear_all">
            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash me-1"></i> Clear All</button>
          </form>
        <?php endif; ?>
      </div>
    </div>

    <!-- Messages List -->
    <?php if (empty($messages)): ?>
      <div class="card shadow-sm border-0 p-5 text-center bg-white">
        <div class="mb-3 text-muted">
          <i class="bi bi-chat-square-dots fs-1"></i>
        </div>
        <h4 class="fw-bold">No Messages Yet</h4>
        <p class="text-muted">Inquiries sent from the portfolio contact form will securely appear here in real-time.</p>
        <div>
          <form method="post" class="d-inline">
            <input type="hidden" name="action" value="send_test">
            <button type="submit" class="btn btn-primary btn-sm px-3 py-2"><i class="bi bi-plus-circle me-1"></i> Generate a Sample Message</button>
          </form>
        </div>
      </div>
    <?php else: ?>
      <div class="row g-3">
        <?php foreach ($messages as $msg): ?>
          <div class="col-12">
            <div class="card shadow-sm card-message p-4 bg-white">
              <div class="d-flex flex-wrap justify-content-between align-items-center mb-2 pb-2 border-bottom">
                <div>
                  <h5 class="fw-bold mb-1 text-primary"><?= e($msg['subject'] ?? 'No Subject') ?></h5>
                  <div class="small text-muted">
                    <span class="fw-semibold text-dark"><i class="bi bi-person me-1"></i><?= e($msg['name'] ?? 'Anonymous') ?></span> &bull; 
                    <a href="mailto:<?= e($msg['email'] ?? '') ?>" class="text-decoration-none text-muted"><i class="bi bi-envelope me-1"></i><?= e($msg['email'] ?? '') ?></a> &bull;
                    <span><i class="bi bi-calendar3 me-1"></i><?= e($msg['created_at'] ?? 'Unknown date') ?></span>
                  </div>
                </div>
                <div>
                  <form method="post" class="d-inline" onsubmit="return confirm('Delete this inquiry?');">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?= e($msg['id'] ?? '') ?>">
                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete Message"><i class="bi bi-trash"></i></button>
                  </form>
                </div>
              </div>
              <div class="mt-2 text-secondary" style="white-space: pre-wrap; font-size: 0.95rem;"><?= e($msg['message'] ?? '') ?></div>
              <div class="mt-3 pt-2 text-end">
                <a href="mailto:<?= e($msg['email'] ?? '') ?>?subject=Re: <?= urlencode($msg['subject'] ?? '') ?>" class="btn btn-sm btn-primary px-3">
                  <i class="bi bi-reply-fill me-1"></i> Reply via Email
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

  </div>

  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
