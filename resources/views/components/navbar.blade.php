<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyNews</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- ไม่ต้องใส่ JS ในนี้นะครับ --}}

</head>

<body class="bg-light">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#">MyWebsite</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-5">
        <h2 class="mb-4 border-start border-4 border-primary ps-3 fw-bold text-dark">
            ข่าวทั้งหมดที่น่าสนใจ
        </h2>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://thethaiger.com/th/wp-content/uploads/2025/09/Summary-of-the-performance-of-the-Thai-womens-volleyball-team-after-the-2025-World-Championship.-World-rankings-rise-to-No.-3-in-Asia.jpg" class="card-img-top" alt="สรุปผลงานลูกยางสาวไทย หลังจบชิงแชมป์โลก 2025 อันดับโลกพุ่ง รั้งเบอร์ 3 เอเชีย">
                    <div class="card-body">
                        <h5 class="card-title">สรุปผลงานลูกยางสาวไทย หลังจบชิงแชมป์โลก 2025 อันดับโลกพุ่ง รั้งเบอร์ 3 เอเชีย</h5>
                        <p class="card-text">ทีมวอลเลย์บอลหญิงไทยทำผลงานโดดเด่นในศึกชิงแชมป์โลก 2025 พร้อมขยับอันดับโลกขึ้นไปอยู่ที่ 3 ของเอเชีย...</p>
                        <a href="/news/sea" class="btn btn-primary btn-sm">อ่านต่อ</a>
                    </div>
                </div>
            </div>

            {{-- ... ข่าวอื่นๆ ... --}}

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>