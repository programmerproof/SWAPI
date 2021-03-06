<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("client/index", "Go Back") }}</li>
            <li class="next">{{ link_to("client/new", "Create ") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>Search result</h1>
</div>

{{ content() }}

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
            <th>Client</th>
            <th>Client Of Phone</th>
            <th>Client Of Address</th>
            <th>Client Of Mobile</th>
            <th>Client Of Email</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for client in page.items %}
            <tr>
                <td>{{ client.getId() }}</td>
            <td>{{ client.getClientName() }} {{ client.getClientSurname() }}</td>
            <td>{{ client.getClientPhone() }}</td>
            <td>{{ client.getClientAddress() }}</td>
            <td>{{ client.getClientMobile() }}</td>
            <td>{{ client.getClientEmail() }}</td>

                <td>{{ link_to("client/edit/"~client.getId(), "Edit") }}</td>
                <td>{{ link_to("client/delete/"~client.getId(), "Delete") }}</td>
            </tr>
        {% endfor %}
        {% endif %}
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-1">
        <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
            {{ page.current~"/"~page.total_pages }}
        </p>
    </div>
    <div class="col-sm-11">
        <nav>
            <ul class="pagination">
                <li>{{ link_to("client/search", "First") }}</li>
                <li>{{ link_to("client/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("client/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("client/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
