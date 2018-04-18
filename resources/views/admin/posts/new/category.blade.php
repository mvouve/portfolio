<div>
    <label>
        <input name="{{ $category->slug  }}" type="checkbox" {{ $category->checked?"checked":"" }}>{{ $category->name }}
    </label>
</div>