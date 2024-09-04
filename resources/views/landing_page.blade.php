@extends('page.main')
@section('content')

    <!-- About Start -->
    <div id="profil">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                            <h1 class="mb-0">Sekolah PG - TK Nur Islam</h1>
                        </div>
                        <p class="mb-4">Pendidikan anak usia dini merupakan upaya pembinaan yang ditujukan kepada anak-anak dari usia dini hingga enam tahun. Upaya ini dilakukan melalui pemberian rangsangan pendidikan untuk mendukung pertumbuhan dan perkembangan fisik serta mental anak, sehingga mereka siap untuk melanjutkan ke jenjang pendidikan berikutnya.
                            Yayasan Nur Islam Hasanah, sebagai lembaga sosial dan pendidikan, berkomitmen untuk berperan aktif dalam mempersiapkan anak-anak berbakat menuju pendidikan yang lebih tinggi dengan mendirikan Playgroup – TK Nur Islam. Playgroup – TK Nur Islam bertekad untuk memberikan pendidikan yang berfokus pada pembentukan karakter anak melalui penanaman nilai-nilai Tauhid dan Adab berdasarkan ajaran Alquran. Dengan demikian, diharapkan anak-anak dapat mengembangkan nilai-nilai kerjasama, saling menghargai, perhatian, kasih sayang, gotong royong, dan kemandirian sejak usia dini.
                            </p>
                        <div class="row g-0 mb-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-80 rounded wow zoomIn" data-wow-delay="0.9s"
                                src="{{ asset('template1/images/sekolah.png')}}" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div id="guru">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h1 class="mb-0">Manajemen</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-10" src="{{ asset('template1/images/guru.png')}}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('template1/images/guru2.png')}}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-2" src="{{ asset('template1/images/guru 3.png')}}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Features Start -->
    <div id="akademik">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h1 class="mb-0">Akademik</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-cubes text-white"></i>
                                </div>
                                <h4>Best In Industry</h4>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor
                                </p>
                            </div>
                            <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-award text-white"></i>
                                </div>
                                <h4>Award Winning</h4>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-users-cog text-white"></i>
                                </div>
                                <h4>Professional Staff</h4>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor
                                </p>
                            </div>
                            <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <h4>24/7 Support</h4>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-users-cog text-white"></i>
                                </div>
                                <h4>Professional Staff</h4>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor
                                </p>
                            </div>
                            <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <h4>24/7 Support</h4>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Contact Start -->
    <div id="kegiatan">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h1 class="mb-0">Kegiatan</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">How to build a website</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">How to build a website</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">How to build a website</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Contact Start -->
    <div id="pendaftaran">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="bg-white rounded p-5 shadow-sm">
                            <!-- Tampilkan Pesan Sukses -->
                            @if (session('success'))
                                <div class="alert alert-success mt-4">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('ppdb.store') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <!-- Bagian Informasi Anak -->
                                    <div class="col-12">
                                        <h2 class="mb-3">Formulir PPDB TK Nur Islam</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nama_lengkap_anak"
                                            class="form-control bg-light border-0" placeholder="Nama Lengkap Anak"
                                            style="height: 55px;" value="{{ old('nama_lengkap_anak') }}">
                                        @error('nama_lengkap_anak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="tempat_lahir_anak"
                                            class="form-control bg-light border-0" placeholder="Tempat Lahir Anak"
                                            style="height: 55px;" value="{{ old('tempat_lahir_anak') }}">
                                        @error('tempat_lahir_anak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date" name="tanggal_lahir_anak"
                                            class="form-control bg-light border-0" placeholder="Tanggal Lahir Anak"
                                            style="height: 55px;" value="{{ old('tanggal_lahir_anak') }}">
                                        @error('tanggal_lahir_anak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <select name="jenis_kelamin_anak" class="form-select bg-light border-0"
                                            style="height: 55px;">
                                            <option value="" disabled selected>Jenis Kelamin Anak</option>
                                            <option value="laki-laki"
                                                {{ old('jenis_kelamin_anak') == 'laki-laki' ? 'selected' : '' }}>Laki-laki
                                            </option>
                                            <option value="perempuan"
                                                {{ old('jenis_kelamin_anak') == 'perempuan' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        </select>
                                        @error('jenis_kelamin_anak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="alamat_lengkap"
                                            class="form-control bg-light border-0" placeholder="Alamat Lengkap"
                                            style="height: 55px;" value="{{ old('alamat_lengkap') }}">
                                        @error('alamat_lengkap')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" name="nomor_telepon" class="form-control bg-light border-0"
                                            placeholder="Nomor Telepon" style="height: 55px;"
                                            value="{{ old('nomor_telepon') }}">
                                        @error('nomor_telepon')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control bg-light border-0"
                                            placeholder="Email" style="height: 55px;" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nik_anak" class="form-control bg-light border-0"
                                            placeholder="NIK Anak" style="height: 55px;" value="{{ old('nik_anak') }}">
                                        @error('nik_anak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nama_orang_tua"
                                            class="form-control bg-light border-0" placeholder="Nama Orang Tua"
                                            style="height: 55px;" value="{{ old('nama_orang_tua') }}">
                                        @error('nama_orang_tua')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nik_orang_tua" class="form-control bg-light border-0"
                                            placeholder="NIK Orang Tua" style="height: 55px;"
                                            value="{{ old('nik_orang_tua') }}">
                                        @error('nik_orang_tua')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" name="nomor_telepon_orang_tua"
                                            class="form-control bg-light border-0" placeholder="Nomor Telepon Orang Tua"
                                            style="height: 55px;" value="{{ old('nomor_telepon_orang_tua') }}">
                                        @error('nomor_telepon_orang_tua')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email_orang_tua"
                                            class="form-control bg-light border-0" placeholder="Email Orang Tua"
                                            style="height: 55px;" value="{{ old('email_orang_tua') }}">
                                        @error('email_orang_tua')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Bagian Keterangan Tambahan -->
                                    <div class="col-12 mt-4">
                                        <h4 class="mb-3">Keterangan Tambahan</h4>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="keterangan_tambahan" class="form-control bg-light border-0" rows="3"
                                            placeholder="Catatan atau Keterangan Tambahan (misalnya alergi, kebutuhan khusus, dsb.)">{{ old('keterangan_tambahan') }}</textarea>
                                        @error('keterangan_tambahan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Tombol Kirim -->
                                    <div class="col-12 mt-4">
                                        <button class="btn btn-dark w-100 py-3" type="submit">Kirim Pendaftaran</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            if ({{ $errors->any() ? 'true' : 'false' }}) {
                const element = document.getElementById('pendaftaran');
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        }
    </script>
    <!-- Contact End -->
@endsection
