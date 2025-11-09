    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
      <div class="sidebar-header">
        <h5 class="mb-0">Yönetim Sistemi</h5>
 <small class="text-white-50">Dashboard</small>
      </div>
      <ul class="sidebar-menu">
        <li>
          <a href="{{ route('admin.dashboard') }}" class="active">
            <i class="bi bi-grid-3x3-gap"></i>
            Ana Sayfa
          </a>
        </li>
        <li>
          <a href="{{ route('admin.sliders') }}">
            <i class="bi bi-images"></i>
            Slider Yönetimi
          </a>
        </li>
        <li>
          <a href="{{ route('admin.categories') }}">
            <i class="bi bi-grid-3x3"></i>
            Kategori Yönetimi
          </a>
        </li>
        <li>
          <a href="{{ route('admin.blogs') }}">
            <i class="bi bi-file-text"></i>
            Blog Yönetimi
          </a>
        </li>
        <li>
          <a href="{{ route('admin.members') }}">
            <i class="bi bi-person"></i>
            Bireysel Üyeler
          </a>
        </li>
        <li>
          <a href="{{ route('admin.corp_members') }}">
            <i class="bi bi-building"></i>
            Kurumsal Üyeler
          </a>
        </li>
        <li>
          <a href="{{ route('admin.requestforms') }}">
            <i class="bi bi-clipboard-data"></i>
            Talep Formları
          </a>
        </li>

        <li>
          <a href="{{ route('admin.general_set') }}">
            <i class="bi bi-gear"></i>
            Genel Ayarlar
          </a>
        </li>
        <li class="mt-4">
          <a href="#" onclick="event.preventDefault(); document.getElementById('adminLogoutForm').submit();">
            <i class="bi bi-box-arrow-right"></i>
            Çıkış Yap
          </a>
        </li>
      </ul>
      <form id="adminLogoutForm" action="{{ route('admin.logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </nav>
