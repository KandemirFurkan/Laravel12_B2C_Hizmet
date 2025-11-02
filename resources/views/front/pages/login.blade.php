@extends('front.layouts.app')

@section('content')
        <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Giriş Yap</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('anasayfa') }}">Ana Sayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giriş Yap</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-5">
            <div class="card shadow-sm">
              <div class="card-body p-4 p-lg-5">
                <h2 class="h4 mb-4">Hesabınıza giriş yapın</h2>

                @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                @if ($errors->any())
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                <form action="{{ route('login.post') }}" method="POST" class="row g-3" novalidate>
                  @csrf
                  <div class="col-12">
                    <label class="form-label" for="loginEmail">E-posta</label>
                    <input 
                      class="form-control @error('email') is-invalid @enderror" 
                      type="email" 
                      id="loginEmail" 
                      name="email" 
                      value="{{ old('email') }}"
                      placeholder="ornek@mail.com" 
                      required
                    >
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="loginPassword">Şifre</label>
                    <input 
                      class="form-control @error('password') is-invalid @enderror" 
                      type="password" 
                      id="loginPassword" 
                      name="password" 
                      placeholder="••••••••" 
                      required
                    >
                    @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-12 d-grid">
                    <button class="btn btn-primary" type="submit">Giriş Yap</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
