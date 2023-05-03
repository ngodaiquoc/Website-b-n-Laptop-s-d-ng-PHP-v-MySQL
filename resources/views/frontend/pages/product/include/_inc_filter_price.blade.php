<ul>
	@for($i = 1; $i <= 6; $i++)
		<li class="{{ Request::get('price') == $i ? "active" : "" }}">
			<a href="{{ request()->fullUrlWithQuery(['price' =>  $i]) }}">
				{{  $i == 6 ? "Lớn hơn 100.000.000 " : "Giá dưới " . number_format($i * 10000000,0,',','.')  ." vnđ" }}
			</a>
		</li>
	@endfor
</ul>