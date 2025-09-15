<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LAXY STORE QR</title>
  <style>
    :root {
      --primary: #6366f1; /* Indigo */
      --secondary: #14b8a6; /* Teal */
    }

    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Inter", sans-serif;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
    }

    .qr-card {
      background: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .qr-card:hover {
      transform: translateY(-5px) scale(1.02);
    }

    .qr-card img {
      width: 250px;
      height: 250px;
    }

    .qr-card h2 {
      margin-top: 1rem;
      font-size: 1.5rem;
      color: var(--primary);
      letter-spacing: 2px;
    }
  </style>
</head>
<body>
  <div class="qr-card">
    <img src="https://nos.wjv-1.neo.id/agampo88/bank-icons/68c4faf1b9719.png" alt="LAXY STORE QR">
    <h2>SCAN ME</h2>
  </div>
</body>
</html>
