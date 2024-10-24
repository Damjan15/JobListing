@props(['id', 'name', 'label' => null, 'value' => '', 'placeholder' => ''])

<div class="mb-4">
    @if ($label)
        <label for="{{$id}}" class="block text-gray-700">{{$label}}</label>
    @endif
    <textarea name="{{$name}}" id="{{$id}}" cols="30" rows="7" class="w-full px-4 py-2 border rounded focus:outline-none @error($name) border-red-500 @enderror" placeholder="{{$placeholder}}">
        {{old($name, $value)}}
    </textarea>
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
    @enderror
</div>