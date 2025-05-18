@props([
    'title' => '',
    'subtitle' => '',
    'parentpage' => '',
    'background' => '',
])
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{ ($background)? $background : asset('images/banner/breadcrumb.webp') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{ $subtitle }}</h1>
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('home') }}">Home</a></li>
							@if ($parentpage)
                            <li>{{ $parentpage }}</li>
                            @endif
							<li>{{ $title }}</li>
						</ul>
					</div>
                </div>
            </div>
        </div>
