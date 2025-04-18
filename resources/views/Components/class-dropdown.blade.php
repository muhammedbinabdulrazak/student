@php
    $isAdmin = auth()->user()->is_admin ?? false;
    $currentClass = request()->route('class') ?? 'ALL';
    $className = match($currentClass) {
        '1' => 'First',
        '2' => 'Second',
        '3' => 'Third',
        '4' => 'Fourth',
        '5' => 'Fifth',
        '6' => 'Sixth',
        '7' => 'Seventh',
        '8' => 'Eighth',
        '9' => 'Ninth',
        '10' => 'Tenth',
        default => 'ALL'
    };
@endphp
<div class="mx-2 d-flex align-items-center justify-content-center">
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ $className }}
        </a>

        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item {{ $currentClass === 'ALL' ? 'active' : '' }}" 
                   href="{{ $isAdmin ? route('admin.students.index') : route('students.index') }}">
                    All
                </a>
            </li>

            @for ($i = 1; $i <= 10; $i++)
                <li>
                    <a class="dropdown-item {{ $currentClass == $i ? 'active' : '' }}" 
                       href="{{ $isAdmin ? route('admin.students.getByClass', ['class' => $i]) : route('students.getByClass', ['class' => $i]) }}">
                        @switch($i)
                            @case(1) First @break
                            @case(2) Second @break
                            @case(3) Third @break
                            @case(4) Fourth @break
                            @case(5) Fifth @break
                            @case(6) Sixth @break
                            @case(7) Seventh @break
                            @case(8) Eighth @break
                            @case(9) Ninth @break
                            @case(10) Tenth @break
                        @endswitch
                    </a>
                </li>
            @endfor
        </ul>
    </div>
</div>
