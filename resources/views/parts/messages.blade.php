{{-- @if(!empty($messages)) --}}
<div class="messageBox">
    {{-- @foreach($messages as $message) --}}
        <div class="contentBox">
            <div class="success">
                <span class="messageSymbol">
                    {{-- $message['type'] == 'success' ? '✓ ' : ''
                    $message['type'] == 'alert' ? '✕ ' : '' --}}
                    ✓ 
                </span>
                {{-- $message['msg'] --}}
                PLACEHOLDER
            </div>
        </div>
    {{-- @endforeach --}}
</div>
{{-- @endif --}}