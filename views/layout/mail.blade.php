<x-mail::layout>
    {{-- Header --}}
    <x-slot:header>
        <tr>
            <td class="header" style="padding:7px 0px;background:#dadff7;">
                <a href="{{ \Fleetbase\Support\Utils::consoleUrl() }}" style="display: inline-block;">
                    {{-- <img src="{{ \Fleetbase\Models\Setting::getBrandingLogoUrl() }}" alt="{{ config('app.name') }} Logo" class="logo" style="height: 35px; width: 200px; max-height: 60px; max-width: 250px;"> --}}
                    <img src="https://raw.githubusercontent.com/Rohit0814/test/main/final%20full%20logo.png" alt="{{ config('app.name') }} Logo" class="logo" style="height: 100%; width: 100%;">
                </a>
            </td>
        </tr>
    </x-slot:header>

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
    <x-slot:subcopy>
        <x-mail::subcopy>
            {{ $subcopy }}
        </x-mail::subcopy>
    </x-slot:subcopy>
    @endisset

    {{-- Footer --}}
    <x-slot:footer>
        <x-mail::footer>
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All Rights Reserved.')
        </x-mail::footer>
    </x-slot:footer>
</x-mail::layout>