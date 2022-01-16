<h3 class="display-6 mt-5 mb-3" id="title-{{ $title->title_id }}-accounting-divisional">{{ $section_label }}</h3>

<ul class="list-inline d-flex justify-content-between mb-4">
    @foreach(['Account_Take_1', 'Account_Take_2', 'Account_Take_3', 'Account_Take_4', 'Account_Take_5', 'Account_Take_6', 'Account_Take_7'] as $role)
        <li class="list-inline-item">
            <span @class([
                'avatar',
                'bg-success' => $corporation->titles()->where('id', $title->id)->whereHas('roles', function ($q) use ($role) { $q->where('type', 'grantable_roles')->where('role', $role); })->exists(),
                'bg-warning' => ! $corporation->titles()->where('id', $title->id)->whereHas('roles', function ($q) use ($role) { $q->where('type', 'grantable_roles')->where('role', $role); })->exists() && $corporation->titles()->where('id', $title->id)->whereHas('roles', function ($q) use ($role) { $q->where('type', 'roles')->where('role', $role); })->exists(),
                'bg-muted' => ! $corporation->titles()->where('id', $title->id)->whereHas('roles', function ($q) use ($role) { $q->where('role', $role); })->exists(),
            ])></span>
        </li>
    @endforeach
</ul>

@for($i = 1; $i <= 4; $i++)
    <div class="row row-cols-2 ps-3 pe-3 mt-3">
        <div class="col ps-3 pe-3">
            <div class="font-weight-bold mb-2">
                @include('web::corporation.security.partials.role-checkbox', ['role_name' => 'Account_Take_' . $i, 'role_type' => 'roles'])
                {{ $corporation->divisions()->where('type', 'wallet')->where('division', $i)->first()->name }}
            </div>
        </div>
        @if($i + 4 < 8)
            <div class="col ps-3 pe-3">
                <div class="font-weight-bold mb-2">
                    @include('web::corporation.security.partials.role-checkbox', ['role_name' => 'Account_Take_' . $i + 4, 'role_type' => 'roles'])
                    {{ $corporation->divisions()->where('type', 'wallet')->where('division', $i + 4)->first()->name }}
                </div>
            </div>
        @endif
    </div>
@endfor