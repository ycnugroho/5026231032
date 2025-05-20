<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welovehonda Links | Twitter, Facebook,Tiktok | Linktree</title>
  <link rel="icon" type="image/png" href="https://assets.production.linktr.ee/profiles/_next/static/logo-assets/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      height: 100%;
      margin: 0;
      padding: 0;
      background-color: rgba(237, 237, 237, 0.85);
      overflow: hidden;
      font-family: 'Quicksand', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      position: relative;
      z-index: 1;
    }

    .topbar {
      position: absolute;
      top: 20px;
      left: 0;
      right: 0;
      display: flex;
      justify-content: space-between;
      padding: 0 20px;
    }   

    .topbar-icon {
      width: 40px;
      height: 40px;
      background-color: rgba(26, 26, 26, 0.35);
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: background-color 0.3s ease;
      pointer-events: all;
      cursor: pointer;
      margin-top: -17px;
    }

    .topbar-icon:hover {
      background-color: transparent;
    }

    .left-icon, .right-icon{
      max-width: 700px;
      margin-left: 200px;
      margin-right: 200px;
    }
    @media (max-width: 1300px) {
      .left-icon, .right-icon{
        margin-left: auto;
        margin-right: auto;  
        max-width: 100%;
      }
    }

    h5 {
       font-weight: 700;
    }

    p, .link-text {
      font-weight: 500;
    }

    .confetti {
      position: absolute;
      width: 10px;
      height: 10px;
      opacity: 0.8;
      animation: fall 6s linear infinite;
      z-index: 0;
    }

    @keyframes fall {
      0% {
        transform: translateY(-10px) rotate(0deg);
        opacity: 1;
      }
      100% {
        transform: translateY(110vh) rotate(360deg);
        opacity: 0;
      }
    }

    .content-wrapper {
      position: relative;
      z-index: 1;
      width: 100%;
      text-align: center;
      margin-top: 70px; 
    }

    .profile-img {
      width: 95px;
      height: 95px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
      margin-top: -7px;
    }

    .verified {
      color: #007bff;
      margin-left: -1px;
    }

    .link-button {
      border-radius: 50px;
      margin: 15px auto;
      font-weight: 500;
      font-size: 16px;
      background: rgba(237, 237, 237, 0.85);
      color: #000;
      display: flex;
      align-items: center;
      justify-content: space-between;
      text-decoration: none;
      width: 600px;
      height: 65px;
      padding: 5px 30px;
      box-shadow:
      2px 5px 12px rgba(0, 0, 0, 0.15), 
      inset -1px -1px 2px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease;
    }

    .link-button:hover {
      transform: scale(1.02);
      text-decoration: none;
      color :black;
      background-color: white;
    }

    .link-button2{
      border-radius: 50px;
      margin: 15px auto;
      margin-top: 50px;
      font-weight: 500;
      font-size: 16px;
      background: rgba(255, 255, 255, 0.25);
      color: #000;
      display: flex;
      align-items: center;
      justify-content: space-between;
      text-decoration: none;
      width: 350px;
      height: 55px;
      padding: 5px 30px;
      box-shadow:
      2px 5px 12px rgba(0, 0, 0, 0.15), 
      inset -1px -1px 2px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease;
    }

    .link-button2:hover {
      text-decoration: none;
      color :black;   
      background-color: white;
    }

    .container{
      margin-top: 30px;
    }

    .link-icon {
      flex: 0 0 auto;
      width: 24px;
      height: 24px;
      margin-right: 15px;
      object-fit: contain;
    }

    .link-text {
      flex: 1;
      text-align: center;
    }

    .link-menu {
      flex: 0 0 auto;
      font-size: 20px;
      color: #666;
    }

  </style>
</head>
<body>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const colors = ['#ff3c3c', '#ffc107', '#28a745', '#17a2b8', '#6f42c1', '#fd7e14'];
      for (let i = 0; i < 40; i++) {
        const confetti = document.createElement('div');
        confetti.classList.add('confetti');
        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        confetti.style.left = Math.random() * 100 + 'vw';
        confetti.style.top = '-' + Math.random() * 100 + 'px';
        const width = Math.random() * 24 + 24; 
        const height = width * 0.4; 
        confetti.style.width = width + 'px';
        confetti.style.height = height + 'px';
        confetti.style.animationDelay = (Math.random() * 6) + 's';
        confetti.style.borderRadius = '999px';
        document.body.appendChild(confetti);
      }
    });
  </script>

  <div class="topbar flex justify-between items-start w-full px-4 pt-4">
    <div class="topbar-icon left-icon">
      <button class="btn p-0 border-0 bg-transparent" aria-label="Follow profile">
        <svg width="20" height="20" viewBox="0 0 16 19" fill="none">
          <path d="M6.36667 15.3667V15.9C6.36667 16.7837 7.08301 17.5 7.96667 17.5C8.85032 17.5 9.56667 16.7837 9.56667 15.9V15.3667M2.1 13.7667C2.1 14.6503 1.38366 15.3667 0.5 15.3667H15.4333C14.5497 15.3667 13.8333 14.6503 13.8333 13.7667V9.5C13.8333 6.25993 12.8067 3.63333 9.56667 3.63333V3.1C9.56667 2.21634 8.85032 1.5 7.96667 1.5C7.08301 1.5 6.36667 2.21634 6.36667 3.1V3.63333C3.1266 3.63333 2.1 6.25993 2.1 9.5L2.1 13.7667Z" stroke="white" stroke-width="1.5" stroke-linejoin="bevel"/>
        </svg>
      </button>
    </div>
  
    <div class="topbar-icon right-icon">
      <button class="btn p-0 border-0 bg-transparent" aria-label="Share profile">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <path fill="black" stroke="white" d="M12.6661 7.33348C12.2979 7.33348 11.9994 7.63195 11.9994 8.00014C11.9994 8.36833 12.2979 8.66681 12.6661 8.66681C13.0343 8.66681 13.3328 8.36833 13.3328 8.00014C13.3328 7.63195 13.0343 7.33348 12.6661 7.33348Z"/>
          <path fill="black" stroke="white" d="M8.00057 7.33348C7.63238 7.33348 7.3339 7.63195 7.3339 8.00014C7.3339 8.36833 7.63238 8.66681 8.00057 8.66681C8.36876 8.66681 8.66724 8.36833 8.66724 8.00014C8.66724 7.63195 8.36876 7.33348 8.00057 7.33348Z"/>
          <path fill="black" stroke="white" d="M3.33333 7.33348C2.96514 7.33348 2.66667 7.63195 2.66667 8.00014C2.66667 8.36833 2.96514 8.66681 3.33333 8.66681C3.70152 8.66681 4 8.36833 4 8.00014C4 7.63195 3.70152 7.33348 3.33333 7.33348Z"/>
        </svg>
      </button>
    </div>
  </div>  

  <div class="content-wrapper">
    <img src="https://ugc.production.linktr.ee/fUqxA2mIQzKkjJUojtsZ_d3a8e9d4a9cdb8734fc3747fe2fed113a?io=true&size=avatar-v3_0" class="profile-img" alt="Honda Logo">
    <h5>Welovehonda <span class="verified"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik04LjUyNDcgMTUuMTIzNEM4LjIwMyAxNC45MjUxIDcuNzk3IDE0LjkyNTEgNy40NzUzIDE1LjEyMzRMNy4xNDg3MyAxNS4zMjQ3QzYuNjk0MiAxNS42MDQ4IDYuMDk5NzQgMTUuNDc4NSA1Ljc5ODQ1IDE1LjAzNzdMNS41ODE5OSAxNC43MjFDNS4zNjg3NSAxNC40MDkgNC45OTc4NSAxNC4yNDM4IDQuNjIzMzIgMTQuMjk0MUw0LjI0MzExIDE0LjM0NTJDMy43MTM5MiAxNC40MTYyIDMuMjIyMjYgMTQuMDU5IDMuMTI2MzEgMTMuNTMzOEwzLjA1NzM3IDEzLjE1NjRDMi45ODk0NyAxMi43ODQ3IDIuNzE3OCAxMi40ODMgMi4zNTUxOSAxMi4zNzY2TDEuOTg3MDkgMTIuMjY4NkMxLjQ3NDc1IDEyLjExODIgMS4xNzA4OCAxMS41OTE5IDEuMjk2ODcgMTEuMDczMUwxLjM4NzM4IDEwLjcwMDNDMS40NzY1NSAxMC4zMzMgMS4zNTEwOSA5Ljk0NjkyIDEuMDYzMSA5LjcwMjI0TDAuNzcwNzU3IDkuNDUzODVDMC4zNjM4NTIgOS4xMDgxMyAwLjMwMDMyNyA4LjUwMzczIDAuNjI2NDYyIDguMDgwOTZMMC44NjA3NzcgNy43NzcyMkMxLjA5MTYgNy40NzgwMSAxLjEzNDA0IDcuMDc0MjQgMC45NzA0NjggNi43MzM1OEwwLjgwNDQyNCA2LjM4Nzc2QzAuNTczMzE0IDUuOTA2NDMgMC43NjExMTQgNS4zMjg0NCAxLjIzMTAxIDUuMDc0ODhMMS41Njg2MSA0Ljg5MjdDMS45MDExNyA0LjcxMzI0IDIuMTA0MTcgNC4zNjE2NCAyLjA5MzMgMy45ODM5TDIuMDgyMjcgMy42MDA0NEMyLjA2NjkyIDMuMDY2NzIgMi40NzM1NyAyLjYxNTA5IDMuMDA1OTcgMi41NzQ1N0wzLjM4ODQ4IDIuNTQ1NDZDMy43NjUyOSAyLjUxNjc4IDQuMDkzNzUgMi4yNzgxNCA0LjIzNzQ2IDEuOTI4NjRMNC4zODMzNSAxLjU3Mzg1QzQuNTg2NCAxLjA4MDAyIDUuMTQxNiAwLjgzMjgzNiA1LjY0NDQ1IDEuMDEyMzdMNi4wMDU3MyAxLjE0MTM1QzYuMzYxNjMgMS4yNjg0MiA2Ljc1ODc1IDEuMTg0MDEgNy4wMzIxOSAwLjkyMzE3M0w3LjMwOTc4IDAuNjU4MzkxQzcuNjk2MTMgMC4yODk4NTIgOC4zMDM4NyAwLjI4OTg1MiA4LjY5MDIyIDAuNjU4MzkyTDguOTY3ODEgMC45MjMxNzNDOS4yNDEyNSAxLjE4NDAxIDkuNjM4MzcgMS4yNjg0MiA5Ljk5NDI3IDEuMTQxMzVMMTAuMzU1NSAxLjAxMjM3QzEwLjg1ODQgMC44MzI4MzYgMTEuNDEzNiAxLjA4MDAyIDExLjYxNjcgMS41NzM4NUwxMS43NjI1IDEuOTI4NjRDMTEuOTA2MyAyLjI3ODE0IDEyLjIzNDcgMi41MTY3OCAxMi42MTE1IDIuNTQ1NDZMMTIuOTk0IDIuNTc0NTdDMTMuNTI2NCAyLjYxNTA5IDEzLjkzMzEgMy4wNjY3MiAxMy45MTc3IDMuNjAwNDRMMTMuOTA2NyAzLjk4MzlDMTMuODk1OCA0LjM2MTY0IDE0LjA5ODggNC43MTMyNCAxNC40MzE0IDQuODkyN0wxNC43NjkgNS4wNzQ4OEMxNS4yMzg5IDUuMzI4NDQgMTUuNDI2NyA1LjkwNjQzIDE1LjE5NTYgNi4zODc3NkwxNS4wMjk1IDYuNzMzNThDMTQuODY2IDcuMDc0MjQgMTQuOTA4NCA3LjQ3ODAxIDE1LjEzOTIgNy43NzcyMkwxNS4zNzM1IDguMDgwOTZDMTUuNjk5NyA4LjUwMzczIDE1LjYzNjEgOS4xMDgxMyAxNS4yMjkyIDkuNDUzODVMMTQuOTM2OSA5LjcwMjI0QzE0LjY0ODkgOS45NDY5MiAxNC41MjM0IDEwLjMzMyAxNC42MTI2IDEwLjcwMDNMMTQuNzAzMSAxMS4wNzMxQzE0LjgyOTEgMTEuNTkxOSAxNC41MjUzIDEyLjExODIgMTQuMDEyOSAxMi4yNjg2TDEzLjY0NDggMTIuMzc2NkMxMy4yODIyIDEyLjQ4MyAxMy4wMTA1IDEyLjc4NDcgMTIuOTQyNiAxMy4xNTY0TDEyLjg3MzcgMTMuNTMzOEMxMi43Nzc3IDE0LjA1OSAxMi4yODYxIDE0LjQxNjIgMTEuNzU2OSAxNC4zNDUyTDExLjM3NjcgMTQuMjk0MUMxMS4wMDIxIDE0LjI0MzggMTAuNjMxMyAxNC40MDkgMTAuNDE4IDE0LjcyMUwxMC4yMDE1IDE1LjAzNzdDOS45MDAyNiAxNS40Nzg1IDkuMzA1OCAxNS42MDQ4IDguODUxMjcgMTUuMzI0N0w4LjUyNDcgMTUuMTIzNFoiIGZpbGw9IiMwMEI2RkYiLz4KPHBhdGggZD0iTTUuMDY5OTggNy41NjI2NUw3LjE5MTMgOS42ODM5N0wxMS40MzM5IDUuNDQxMzMiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMiIvPgo8L3N2Zz4K"></span></h5>
    <p>Official Account of PT. Astra Honda Motor</p>

    <div class="container">

      <a href="https://www.youtube.com/user/welovehondaID/videos" target="_blank" rel="noopener noreferrer" class="link-button">
        <img src="materialLinktree/youtube-play.png" alt="YouTube" class="link-icon">
        <span class="link-text">Youtube</span>
        <span class="link-menu">&#8942;</span>
      </a>

      <a href="https://www.tiktok.com/?_r=1" target="_blank" rel="noopener noreferrer" class="link-button">
        <img src="materialLinktree/pngimg.com - tiktok_PNG27.png" alt="TikTok" class="link-icon">
        <span class="link-text">TikTok</span>
        <span class="link-menu">&#8942;</span>
      </a>

      <a href="https://web.facebook.com/welovehonda/?ref=aymt_homepage_panel&eid=ARD_VSdU1fffOAyeSdrFziweIXy0x4METu4cbAyQV2lv-V7cA7Vl21RZIDV0g36DBFb-oFJCDAl3CZJc&utm_medium=linktree&utm_source=linktree&utm_campaign=facebook&_rdc=1&_rdr#" target="_blank" rel="noopener noreferrer" class="link-button">
        <img src="materialLinktree/tiktok-black-icon-logo-png_seeklogo-429281.png" alt="Facebook" class="link-icon">
        <span class="link-text">Facebook</span>
        <span class="link-menu">&#8942;</span>
      </a>

      <a href="https://x.com/welovehonda?utm_medium=linktree&utm_source=linktree&utm_campaign=twitter" target="_blank" rel="noopener noreferrer" class="link-button">
        <img src="materialLinktree/twitter-icon-2048x1691-rjjvhexp.png" alt="Twitter" class="link-icon">
        <span class="link-text">Twitter</span>
        <span class="link-menu">&#8942;</span>
      </a>

      <a href="https://www.astra-honda.com/?utm_medium=linktree&utm_source=linktree&utm_campaign=website" target="_blank" rel="noopener noreferrer" class="link-button">
        <img src="materialLinktree/1103442.png" alt="Website" class="link-icon">
        <span class="link-text">Website</span>
        <span class="link-menu">&#8942;</span>
      </a>

      <a href="https://www.astra-honda.com/helpcenter?utm_medium=linktree&utm_source=linktree&utm_campaign=contact+us" target="_blank" rel="noopener noreferrer" class="link-button">
        <img src="materialLinktree/text-message-icon-png-3.png" alt="Contact Us" class="link-icon">
        <span class="link-text">Contact Us</span>
        <span class="link-menu">&#8942;</span>
      </a>

      <a class="link-button2 mt-5">
        <img src="https://cdn.iconscout.com/icon/free/png-512/free-linktree-logo-icon-download-in-svg-png-gif-file-formats--social-brand-communication-company-pack-logos-icons-9631079.png?f=webp&w=256" alt="Linktree" class="link-icon">
        <span class="link-text">Join welovedhonda on Linktree</span>
      </a>

    </div>
  </div>
</body>
</html>
