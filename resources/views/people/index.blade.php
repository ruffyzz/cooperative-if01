<h1>Halo Ini Index dari Person</h1>

<p>
    {{$name}}
</p>

@if($grade >= 60)
<h3>
    Lulus
</h3>
@else
<h3>
    Tidak Lulus
</h3>
@endif

@for($i = 1;$i <= 10;$i++)
{{$i}}
@endfor

