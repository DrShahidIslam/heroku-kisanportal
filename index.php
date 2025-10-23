<?php
// Kisan Portal – Single File Version for Heroku

$title = "Kisan Portal – PM Kisan Yojana, Government Schemes & Farmer Updates 2025";
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <meta name="description" content="Kisan Portal brings you the latest updates on PM Kisan Yojana, government agricultural schemes, crop insurance, and farmer registration for 2025.">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f8f5;
      color: #333;
      margin: 0;
      line-height: 1.6;
    }
    header {
      background: #2e7d32;
      color: white;
      text-align: center;
      padding: 2rem 1rem;
    }
    header h1 { margin-bottom: 0.5rem; }
    main {
      max-width: 800px;
      margin: 2rem auto;
      padding: 0 1rem;
    }
    section {
      margin-bottom: 2rem;
      background: #fff;
      border-radius: 8px;
      padding: 1.5rem;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    h2 {
      color: #1b5e20;
      margin-top: 0;
    }
    a {
      color: #2e7d32;
      text-decoration: none;
    }
    a:hover { text-decoration: underline; }
    .btn {
      display: inline-block;
      background: #43a047;
      color: white;
      padding: 0.6rem 1.2rem;
      border-radius: 4px;
      margin-top: 1rem;
    }
    footer {
      text-align: center;
      padding: 1rem;
      background: #e8f5e9;
      font-size: 0.9rem;
      margin-top: 2rem;
    }
  </style>
</head>
<body>
  <header>
    <h1>Kisan Portal 2025</h1>
    <p>Your trusted source for government scheme updates and farmer information.</p>
  </header>

  <main>
    <section>
      <h2>About PM Kisan Yojana</h2>
      <p>The PM Kisan Samman Nidhi Yojana provides financial support to farmers across India. Stay informed about installment release dates, eligibility, and eKYC requirements.</p>
      <a href="https://kisanportal.org/pmkisan-status/" class="btn">Check PM Kisan Status</a>
    </section>

    <section>
      <h2>Popular Resources</h2>
      <ul>
        <li><a href="https://kisanportal.org/pmfby-guide/">Pradhan Mantri Fasal Bima Yojana (PMFBY) Guide</a></li>
        <li><a href="https://ladkibahin-yojana.org/">Ladki Bahin Yojana Updates</a></li>
        <li><a href="https://swamivivekanandascholarship.org/">Swami Vivekananda Scholarship Portal</a></li>
      </ul>
    </section>

    <section>
      <h2>About Kisan Portal</h2>
      <p>Kisan Portal is an independent platform providing curated information on government welfare schemes for farmers, students, and women empowerment in India.</p>
    </section>
  </main>

  <footer>
    <p>© <?= $year ?> Kisan Portal | All Rights Reserved.</p>
  </footer>
</body>
</html>
