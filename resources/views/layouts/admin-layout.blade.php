<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Admin Dashboard')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#9E1F27] text-white flex flex-col">
      <div class="p-6 text-2xl font-bold border-b border-white/20">Admin</div>
      <nav class="flex-1 p-4 space-y-2">
        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-[#7e1a20]">Dashboard</a>
        <a href="{{ route('admin.communities.index') }}" class="block px-4 py-2 rounded hover:bg-[#7e1a20]">Communities</a>
        <a href="{{ route('admin.groups.index') }}" class="block px-4 py-2 rounded hover:bg-[#7e1a20]">Groups</a>
        <a href="{{ route('admin.members.index') }}" class="block px-4 py-2 rounded hover:bg-[#7e1a20]">Members</a>
      </nav>
    </aside>

    <!-- Content -->
    <main class="flex-1 p-8 overflow-y-auto">
      @yield('content')
    </main>
  </div>
</body>
</html>
