<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portofolio | Moch. Ramzy Naufal Endi Putra</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
    font-family: 'Poppins', sans-serif;
    background-color: #0b1220; /* lebih terang dikit */
    color: #f8fafc; /* putih terang */
}

.navbar {
    background-color: #020617;
}

.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
}

.hero h1 span {
    color: #38bdf8;
}

.section {
    padding: 80px 0;
}

p {
    color: #e2e8f0; /* teks paragraf lebih terang */
    font-size: 1.05rem;
}

.card {
    background-color: #020617;
    border: 1px solid #1e293b; /* border bantu kontras */
    box-shadow: 0 10px 30px rgba(0,0,0,.5);
    transition: transform .3s;
}

.card h5 {
    color: #ffffff;
}

.card:hover {
    transform: translateY(-10px);
}

.skill-badge {
    background-color: #1e293b;
    color: #f8fafc;
    padding: 10px 15px;
    border-radius: 8px;
    margin: 6px;
    display: inline-block;
    font-weight: 500;
}

footer {
    background-color: #020617;
    color: #cbd5f5;
}

a:focus,
button:focus {
    outline: 3px solid #38bdf8;
    outline-offset: 3px;
}


    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Ramzy</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skill</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Project</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero text-center">
    <div class="container">
        <h1 class="fw-bold display-4">
            Hi, Saya <br>
            <span>MOCH. RAMZY NAUFAL<br>ENDI PUTRA</span>
        </h1>
            <p class="mt-4">
            Mahasiswa | Web Developer | Laravel Enthusiast
        </p>
        <a href="#projects" class="btn btn-info btn-lg mt-4">Lihat Project</a>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="section">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center">Tentang Saya</h2>
        <p class="text-center text-secondary">
            Saya adalah mahasiswa yang memiliki ketertarikan dalam pengembangan
            aplikasi web menggunakan Laravel. Terbiasa membuat sistem informasi,
            aplikasi CRUD, serta integrasi database.
        </p>
    </div>
</section>

<!-- SKILLS -->
<section id="skills" class="section bg-dark">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Skill</h2>

        <div>
            <span class="skill-badge">Laravel</span>
            <span class="skill-badge">PHP</span>
            <span class="skill-badge">MySQL</span>
            <span class="skill-badge">Java</span>
            <span class="skill-badge">HTML & CSS</span>
            <span class="skill-badge">Bootstrap</span>
            <span class="skill-badge">Java Swing</span>
            <span class="skill-badge">Git</span>
        </div>
    </div>
</section>


<!-- PROJECTS -->
<section id="projects" class="section">
    <div class="container">
        <h2 class="fw-bold mb-5 text-center">Project</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card p-4 h-100">
                    <h5 class="fw-bold">Sistem Absensi Karyawan</h5>
                    <p class="text-secondary mt-2">
                        Aplikasi absensi Java dengan validasi check-in dan check-out berbasis database.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card p-4 h-100">
                    <h5 class="fw-bold">Aplikasi Kasir</h5>
                    <p class="text-secondary mt-2">
                        Aplikasi kasir Java Swing dengan manajemen stok dan laporan laba rugi.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card p-4 h-100">
                    <h5 class="fw-bold">Sistem Informasi Penjualan</h5>
                    <p class="text-secondary mt-2">
                        Sistem penjualan pupuk berbasis web menggunakan Laravel dan MySQL.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="section bg-dark text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">Kontak</h2>
        <p>Email: ramzy@email.com</p>
        <p>GitHub: github.com/ramzynaufal</p>
        <p>LinkedIn: linkedin.com/in/ramzynaufal</p>
    </div>
</section>

<footer class="text-center py-3">
    © 2026 Moch. Ramzy Naufal Endi Putra
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
