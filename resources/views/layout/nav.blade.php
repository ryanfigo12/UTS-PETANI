<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>HOME</span></a></li>
        @if (auth()->user()->level==1)
        <li class="{{request()-> is('data') ? 'active' : ''}}"><a href="/data"><i class="fa fa-desktop"></i> <span>DATA JAJAN BALI</span></a></li>
        <li class="{{request()-> is('') ? 'active' : ''}}"><a href="/"><i class="fa fa-cart-arrow-down"></i> <span>PESANAN</span></a></li>
        <li class="{{request()-> is('jajanbali') ? 'active' : ''}}"><a href="/jajanbali"><i class="fa fa-group"></i> <span>JAJAN BALI</span></a></li>
        <li class="{{request()-> is('infojajan') ? 'active' : ''}}"><a href="/infojajan"><i class="fa fa-desktop"></i> <span>INFO JAJAN BALI</span></a></li>
        <li class="{{request()-> is('info') ? 'active' : ''}}"><a href="/info"><i class="fa fa-info"></i> <span>INFO TOKO</span></a></li>
        @elseif (auth()->user()->level==2)
        <li class="{{request()-> is('data') ? 'active' : ''}}"><a href="/data"><i class="fa fa-desktop"></i> <span>DATA JAJAN BALI</span></a></li>
        <li class="{{request()-> is('') ? 'active' : ''}}"><a href="/"><i class="fa fa-cart-arrow-down"></i> <span>PESANAN</span></a></li>
        <li class="{{request()-> is('jajanbali') ? 'active' : ''}}"><a href="/jajanbali"><i class="fa fa-group"></i> <span>JAJAN BALI</span></a></li>
        <li class="{{request()-> is('infojajan') ? 'active' : ''}}"><a href="/infojajan"><i class="fa fa-desktop"></i> <span>INFO JAJAN BALI</span></a></li>
        <li class="{{request()-> is('info') ? 'active' : ''}}"><a href="/info"><i class="fa fa-info"></i> <span>INFO TOKO</span></a></li>
        @endif