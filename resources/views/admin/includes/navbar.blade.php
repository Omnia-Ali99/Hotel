
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;    height: 100%;">

<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-decoration-none text-muted">
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('dashboard')" class="logo text-decoration-none">
                        {{ __('Hotale') }}
                    </x-nav-link>
                </div>
            
    <hr>
    <ul class="nav nav-pills flex-column " style="margin-bottom: 190%;" >
      <li >
        <div class="active-ad">
        <a  href="{{ route('dashboard_admin.index') }}"class="nav-link  link-dark  " >
        Bookings 
        </a>
        </div>
      </li>
      <li >
      <div class="active-ad">
        <a href="{{ route('recycle-bin') }}" class="nav-link link-dark ">
        Recycle Bin 
        </a>
      </div>
      </li>
     
      <li>
      <div class="active-ad">
        <a href="#" class="nav-link link-dark">
        Add Information
        </a>
      </div>
      </li>
    </ul>
    <hr class="mb-7">
    <div class="hidden sm:flex sm:items-center sm:ml-6 ">
                <x-dropdown align="left"  width="48"  >
                    <x-slot name="trigger" >
                        <button class=" button-a inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::guard('admin')->user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content"  >
                      <div style="padding:0 20% ;">
                    <x-dropdown-link :href="route('adminProfile.edit')" >
                            {{ __('Profile') }}
                        </x-dropdown-link>
                      </div>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('admin.logout') }}" style="padding:0 20% ;
" >
                            @csrf

                            <x-dropdown-link :href="route('admin.logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            
  </div>



