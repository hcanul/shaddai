<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{route('dashboard')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    @include('layouts.themes.icons.dashboard')
                    <span class="ml-3">Dashboard</span>
                </a>
                    @role('SuperAdmin|SuperUser')
                        @include('layouts.themes.content.sideBar.menu.settings')
                    @endrole
                    @role('SuperAdmin|SuperUser|Registro')
                        @include('layouts.themes.content.sideBar.menu.pacientes')
                    @endrole
        </ul>
    </div>
</aside>
