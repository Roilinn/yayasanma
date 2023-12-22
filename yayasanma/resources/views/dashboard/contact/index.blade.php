@extends('layouts.base')

@section('title', 'List Contact Messages')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="mb-4 text-2xl font-bold">List Contact Messages</h1>

        <a href="{{ route('pesan.create') }}"
            class="mb-4 inline-block rounded-lg bg-indigo-500 px-4 py-2 text-white hover:bg-indigo-600">
            Create Message
        </a>


        @if (session('success'))
            <div class="mb-4 rounded bg-green-100 p-3 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-hidden rounded-lg bg-white shadow-md">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            Nama Penulis
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            Email Penulis
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            Nomor Telepon
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            Pesan
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($contacts as $contact)
                        <tr>
                            <td class="whitespace-nowrap px-6 py-4">{{ $contact->nama_penulis }}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <div class="flex items-center">
                                    <span>{{ $contact->email_penulis }}</span>
                                    <button onclick="copyToClipboard('{{ $contact->email_penulis }}')"
                                        class="ml-2 text-blue-500">Copy</button>
                                </div>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <div class="flex items-center">
                                    <span>{{ $contact->nomor_telepon }}</span>
                                    <button onclick="copyToClipboard('{{ $contact->nomor_telepon }}')"
                                        class="ml-2 text-blue-500">Copy</button>
                                </div>
                            </td>
                            <td class="px-6 py-4">{{ $contact->pesan }}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <a href="{{ route('pesan.show', $contact->id) }}"
                                    class="text-blue-500 hover:underline">View</a>
                                <a href="{{ route('pesan.edit', $contact->id) }}"
                                    class="ml-4 text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('pesan.destroy', $contact->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-4 text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function copyToClipboard(text) {
            const el = document.createElement('textarea');
            el.value = text;
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            alert('Copied to clipboard');
        }
    </script>
@endsection
