@if(session('error'))
    <div id="error-message" class="message_error">{{ session('error') }}</div>
@endif

@if(session('success'))
    <div id="error-message" class="message_success">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div id="error-message" class="message_error">
        {{ $errors->first() }}
    </div>
@endif
