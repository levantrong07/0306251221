<?php
require_once __DIR__ . '/includes/init.php';

// Đã đăng nhập thì đưa thẳng vào khu vực tương ứng
if (isset($_SESSION['admin'])) {
    header('Location: ' . INDEX_URL . 'admin/');
    exit();
}
if (isset($_SESSION['sinhvien'])) {
    header('Location: ' . INDEX_URL . 'index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chọn khu vực đăng nhập | Hệ thống quản lý sinh viên</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- ICON TRANG WEB -->
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🎓</text></svg>">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

  <!-- CARD CHỌN VAI TRÒ (cùng màu với trang đăng nhập) -->
  <main class="bg-white shadow-xl rounded-2xl w-full max-w-xl p-8 space-y-6 text-center">

    <div class="flex justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1a4 4 0 004 4 4 4 0 004-4V6a4 4 0 00-4-4zM3 18a7 7 0 1114 0H3z" clip-rule="evenodd" />
      </svg>
    </div>

    <div>
      <h1 class="text-2xl font-semibold text-blue-700">Hệ thống quản lý sinh viên</h1>
      <p class="text-gray-500 text-sm mt-1">Xin chào Quản trị viên &amp; Sinh viên</p>
    </div>

    <p class="text-sm text-gray-600">
      Vui lòng chọn khu vực đăng nhập phù hợp với vai trò của bạn
    </p>

    <!-- HAI NÚT CHỌN VAI TRÒ -->
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">

      <!-- SINH VIÊN -->
      <a href="login.php"
        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition duration-200">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422A12.083 12.083 0 0121 17.5M12 14l-6.16-3.422A12.083 12.083 0 003 17.5M12 14v7" />
        </svg>
        Sinh Viên Đăng Nhập
      </a>

      <!-- QUẢN TRỊ VIÊN -->
      <a href="admin/login.php"
        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white px-6 py-2 rounded-lg font-semibold transition duration-200">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
        </svg>
        Quản Trị Viên Đăng Nhập
      </a>

    </div>

    <!-- FOOTER -->
    <div class="text-center text-gray-400 text-xs mt-4">
      © 2025 - Hệ thống quản lý sinh viên
    </div>

  </main>

</body>

</html>