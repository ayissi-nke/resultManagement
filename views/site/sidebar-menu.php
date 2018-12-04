<?php
  use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Result Management';
?>

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>HOD</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Manage Courses<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><?= Html::a("Add", ['site/add-courses']) ?></li>
          <li><?= Html::a("consult",['site/consult-courses']) ?></li>
          
          

        </ul>
      </li>
      <li><a><i class="fa fa-desktop "></i> Manage Student <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><?= Html::a("Add-student", ['site/add-student']) ?></li>
          <li><?= Html::a("consult-student", ['site/consult-student']) ?></li>

          
        </ul>
      </li>
      <li><a><i class="fa fa-windows "></i> Manage Levels <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><?= Html::a("Add-levels", ['site/add-levels']) ?></li>
          <li><?= Html::a("Consult-levels", ['site/consult-levels']) ?></li>

         
        </ul>
      </li>
  <!--    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="tables.html">Tables</a></li>
          <li><a href="tables_dynamic.html">Table Dynamic</a></li>
        </ul>
      </li>
      <li><a><i class=" fa fa-edi "></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="chartjs.html">Chart JS</a></li>
          <li><a href="chartjs2.html">Chart JS2</a></li>
          <li><a href="morisjs.html">Moris JS</a></li>
          <li><a href="echarts.html">ECharts</a></li>
          <li><a href="other_charts.html">Other Charts</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
          <li><a href="fixed_footer.html">Fixed Footer</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu_section">
    <h3>Live On</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="e_commerce.html">E-commerce</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="project_detail.html">Project Detail</a></li>
          <li><a href="contacts.html">Contacts</a></li>
          <li><a href="profile.html">Profile</a></li>
        </ul>
      </li> -->
      <li><a><i class="fa fa-sitemap   "></i> Manage Speciality <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><?= Html::a("add-speciality", ['site/add-speciality']) ?></li>
          <li><?= Html::a("consult-speciality", ['site/consult-speciality']) ?></li>

          
          
          
        </ul>
      </li> 
      <li><a><i class="fa fa-bar-chart-o "></i> Manage Results <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            
            <li><?= Html::a("Semester Results",['site/semester-results'])?></li>
            <li><?= Html::a("statistics",['site/statistics']) ?>
        </ul>
            
          
            
        
      </li>                 
      <li><a href="javascript:void(0)"><i class="fa fa-comments"></i> live  chat <span class="label label-success pull-right">Coming Soon</span></a></li>
    </ul>
  </div>

</div>
<!-- /sidebar menu -->