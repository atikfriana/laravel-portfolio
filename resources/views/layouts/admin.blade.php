<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Admin | Dashboard</title>
  <style>
    /* Menghapus semua background gambar dan memastikan background solid */
    body, html {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f4f4f9; /* Ganti dengan warna latar belakang solid yang kamu inginkan */
    }

    /* Efek blur latar belakang */
    .login-container {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5); /* Overlay transparan */
        backdrop-filter: blur(10px); /* Efek blur */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Kotak login */
    .login-box {
        background: rgba(255, 255, 255, 0.9); /* Kotak login dengan transparansi */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    /* Form input */
    .textbox {
        margin-bottom: 20px;
    }

    .textbox input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        outline: none;
    }

    .textbox input:focus {
        border-color: #1E3A8A;
    }

    /* Tombol login */
    .btn-login {
        width: 100%;
        padding: 10px;
        background-color: purple;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-login:hover {
        background-color: pink;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="/login" method="POST">
        @csrf
        <div class="textbox">
          <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="textbox">
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
