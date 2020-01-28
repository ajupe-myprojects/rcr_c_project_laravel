            <div class="formfield">
                <label for="title">Title </label>
                <input type="text" name="title" id="title" value="{{old('title', $book->title ?? null)}}">
            </div>
            <div class="formfield">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" value="{{old('author', $book->author ?? null)}}">
            </div>
            <div class="formfield">
                <label for="description">Description</label>
                <textarea cols="30" rows="10" name="description" id="description">{{old('description', $book->description ?? null)}}</textarea>
            </div>
            <div class="formfield">
                <label for="isbn">ISBN-13</label>
                <input type="text" name="isbn" id="isbn" value="{{old('isbn', $book->isbn ?? null)}}">
            </div>
            @if($errors->any())
            <div class="formfield">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
