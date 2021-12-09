<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Image Index</th>
                            <th scope="col">Image Title</th>
                            <th scope="col" colspan="3">Setting</th>
                          </tr>
                        </thead>
                        @foreach ($uploads as $upload)
                        <tbody>
                          <tr>
                            <th scope="row">{{ $upload->id }}</th>
                            <td>{{ $upload->title }}</td>
                            <td>
                                <div class="svg_view">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/>
                                    </svg>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg_delete" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M3 6v18h18v-18h-18zm5 14c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4-18v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712z"/>
                                    </svg>
                                </div>
                            </td>

                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg_edit" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M8.424 12.282l4.402 4.399-5.826 1.319 1.424-5.718zm15.576-6.748l-9.689 9.804-4.536-4.536 9.689-9.802 4.536 4.534zm-6 8.916v6.55h-16v-12h6.743l1.978-2h-10.721v16h20v-10.573l-2 2.023z"/>
                                </svg>
                            </td>
                        </tbody>
                        @endforeach
                      </table>

                </div>
            </div>
        </div>
    </div>
<div>
