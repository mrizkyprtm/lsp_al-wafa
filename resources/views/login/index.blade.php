<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LSP Al-Wafa | Login</title>

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <section id="login" class="login" style="min-height: 100vh;">
        <div class="container">
            <div class="row" style="min-height: 100vh;">
                <div class="col-6 d-flex justify-content-center flex-column">
                    <h1 class="fw-bold">Aplikasi Sertifikasi LSP</h1>
                    <p>Dapatkan Sertifikasi Kompetensi untuk keahlianmu, guna menunjang karir Profesional dan raihlah kesuksesan atas kemampuan yang dimiliki.</p>
                </div>
                
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <div class="judul">
                        <h1 class="fw-bold">Login</h1>
                        <p>Karyawan LSP</p>
                        <form>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="email" class="form-control" id="username" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </form>
                        <p><a href="">Login Sebagai Asesi</a></p>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>