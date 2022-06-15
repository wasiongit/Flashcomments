@props(['language'])
    <div class="mb-3">
        <label
            for="language"
            class="form-label"
        ><span class="fi fi-{{$language->flag_code}} fis"></span> {{$language->title}}</label>
        <input
            type="number"
            class="form-control w-50"
            name="{{$language->title}}"
            value="{{old($language->title)}}"/>
            @error($language->title)
            <p class="text-danger">{{$message}}</p>
            @enderror
    </div>