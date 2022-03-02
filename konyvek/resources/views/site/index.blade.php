@extends("layouts.main")
@section("title", "Könyvek")
@section("content")
    <h1>Könyvek</h1>
    <table class="table table-striped" id="books">
        <thead>
        <tr>
            <td>ISBN</td>
            <td>Cím</td>
            <td>Oldalak száma</td>
            <td>Szerző</td>
            <td>Sorozat és Epizód</td>
            <td>Kategória</td>
        </tr>
        </thead>
        <tbody>
            <td colspan="3">Nincs megjelenítendő adat</td>
        </tbody>
    </table>
@endsection
@section("innerjs")
    <script>
        let data = [];
        /**
         * @param {String} orderBy - Mi alapján rendezzük az adatokat
         * @param {String} order - Milyen sorrendbe
         * */
        async function load(orderBy, order){
            let extension = "";
            if (orderBy !== undefined && order !== undefined){
                extension = `?orderBy=${orderBy}&order=${order}`;
            }
            let resp = await fetch(`{{route("books.index")}}` + extension);
            if(resp.status === 200){
                let data = await resp.json();
                showTable(data.data);
            }
            else{
                alert("Nem sikerült");
            }
        }

        async function showTable(){
            let tbody = document.querySelector("tbody");
            tbody.innerHTML = "";

            if(data.length === 0){
                let row = document.createElement("tr");
                let col = document.createElement("td");
                col.setAttribute("colspan", "3");
                col.textContent = "Nincs megjelenítendő adat";
                row.append(col);
                tbody.append(row);
            }
            for (let item of data) {
                let col1 = document.createElement("td");
                col1.textContent = item.isbn;

                let col2 = document.createElement("td");
                col2.textContent = item.title_original;

                let col3 = document.createElement("td");
                col3.textContent = item.pages;

                let col4 = document.createElement("td");
                col4.textContent = item.author;

                let col5 = document.createElement("td");
                col5.textContent = `${item.series} ${item.episode}`;

                let col6 = document.createElement("td");
                col6.textContent = item.category;

                let row = document.createElement("tr");
                row.append(col1, col2, col3, col4, col5, col6);
                tbody.append(row);
            }
        }
    </script>

@endsection