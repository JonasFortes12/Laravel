<x-layout title="Add Serie">

    <form action="/series/save" method="post">
        @csrf //directive validation
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-layout>
