<div class="nav-wrapper">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{% url 'dashboard' %}">
                <i class="material-icons">edit</i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{% url 'datamaster' %}">
                <i class="material-icons">vertical_split</i>
                <span>Data Master</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{% url 'petunjuk' %}">
                <i class="material-icons">vertical_split</i>
                <span>Petunjuk</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{% url 'pengaduan' %}">
                <i class="material-icons">note_add</i>
                <span>Pengaduan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{% url 'menajemen_user' %}">
                <i class="material-icons">people</i>
                <span>Menajemen Akun</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="tables.html">
                <i class="material-icons">table_chart</i>
                <span>Menajemen Backup</span>
            </a>
        </li>
        
    </ul>
</div>