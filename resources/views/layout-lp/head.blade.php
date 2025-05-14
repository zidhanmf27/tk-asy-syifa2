<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>TK AS-SYIFA 2</title>
    <link rel="icon" type="assets/png" href="{{ asset('assets/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    
    <style>
      .scroll-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #000000;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
        opacity: 0;
        visibility: hidden;
      }
      .scroll-to-top.active {
        opacity: 1;
        visibility: visible;
      }
      .scroll-to-top:hover {
        transform: translateY(-5px);
        background: #65a30d;
        color: #000000;
        border: 2px solid #000000;
      }

      .sprinkle {
        position: absolute;
        width: 6px;
        height: 6px;
        border-radius: 9999px;
        pointer-events: none;
        animation: fade 0.5s ease-out forwards;
      }

      @keyframes fade {
        from {
          opacity: 1;
          transform: scale(1);
        }
        to {
          opacity: 0;
          transform: scale(2);
        }
      }
    </style>
  </head>

  <body class="bg-gray-100"></body>

  <script>
    const colors = [
      '#FF0000', // Red
      '#FF7F00', // Orange
      '#FFFF00', // Yellow
      '#00FF00', // Green
      '#0000FF', // Blue
      '#4B0082', // Indigo
      '#9400D3'  // Violet
    ];
    let colorIndex = 0;

    document.addEventListener('mousemove', function (e) {
      const sprinkle = document.createElement('div');
      sprinkle.className = 'sprinkle';
      sprinkle.style.backgroundColor = colors[colorIndex];
      
      // Cycle through colors
      colorIndex = (colorIndex + 1) % colors.length;

      sprinkle.style.left = `${e.clientX}px`;
      sprinkle.style.top = `${e.clientY}px`;

      document.body.appendChild(sprinkle);

      setTimeout(() => {
        sprinkle.remove();
      }, 500);
    });
  </script>