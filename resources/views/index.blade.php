<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UNIVESP - Projeto Integrador III</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">UNIVESP PI III</span>
                <span class="d-none d-lg-block"><img class="img-fluid mx-auto mb-2" src="assets/img/univesp-logo-projeto.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Situação epidemiológica no Brasil</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Consulte a sua região</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Formas de prevenção</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Bla bla bla</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Nossa Equipe</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        UNIVESP
                        <span class="text-primary">Combate à Dengue</span>
                    </h1>
                    <div class="subheading mb-5">
                        Uso de tecnologia no combate à Dengue ·
                        <a href="mailto:name@email.com">Projeto Integrador em Computação III</a>
                    </div>
                    <p class="lead mb-5">O presente projeto teve seu desenvolvimento através de conhecimentos multidisciplinares obtidos através das aulas da Universidade Virtual do Estado de São Paulo - UNIVESP. Este WebApp tem como objetivo informar seus usuários acerca dos casos de dengue em sua cidade, correlacionando os dados obtidos com um API de clima para informar sobre possíveis aumento dos focos de dengue no local.</p>
                    <div class="row pt-3">
                        <div class="floating-window" id="floatingWindow" style="height: 650px; width: 100%;" div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Consulte a sua região</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Consulte os dados a seguir</h3>
                            <p>Digite seu CEP no campo a seguir e verifique a situação epidemiológica na sua região, assim como predições matemáticas do número de casos baseado no clima.</p>
                            <p>
                                <div class="form-group">
                                    <label for="cep">CEP</label>
                                    <input type="numeric" class="form-control" id="cep" aria-describedby="cepHelp" placeholder="Digite o seu CEP">
                                    <small id="cepHelp" class="form-text text-muted">Os dados não serão armazenados e está limitado à consulta a API.</small>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Consultar</button>
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">API InfoDENGUE</span></div>
                    </div>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Formas de prevenção</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Todos contra o mosquito</h3>
                            <div class="subheading mb-3">Faça o seu papel no combate ao mosquito da dengue</div>
                            <div><img src="{{ asset('assets/img/dengue-1-scaled.jpg') }}" width="100%"></div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"></span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
                    <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Nossa Equipe</h2>
                    <ul class="fa-ul mb-0">
                        <li>Ailton Ferreira da Silva, 2105924</li>
                        <li>Anderson Luiz Portela, 1816700</li>
                        <li>Áurélio Francisco da Silva, 2007144</li>
                        <li>Ildo Aladim Simões, 2015437</li>
                        <li>Lucineia Ferreira da Silva, 2100387</li>
                        <li>Maurício Batista de Moura, 1713318</li>
                        <li>Stuart Buzan Gasparoto, 2003416</li>
                        <li>&nbsp;</li>
                        <li><b>Orientadora:</b> Natália P. R. da Silva
                        <li>&nbsp;</li>
                        <li><b>Polos:</b> Igaratá, Jacareí e São José dos Campos
                    </ul>
                </div>
            </section>
        </div>

        <script type="text/javascript">
/**
 * Initialize and configure ECharts chart.
 */
function initializeEChart(disease, incidenceType) {
  var myChart = echarts.init(document.getElementById('floatingWindow'));
  const blueVioletPalette = [
    '#cddcf9',
    '#4169E1',
    '#483D8B',
    '#6A5ACD',
    '#7B68EE',
    '#781679'
  ];

  if (myChart) {
    $.get("https://api.mosqlimate.org/static/data/geo/BR.json", function (brJson) {
      myChart.hideLoading();
      echarts.registerMap('BR', { geoJSON: brJson });

      var diseaseDataMapping = {
        'dengue': [{'name': 'Roraima', 'value': 1561}, {'name': 'Sergipe', 'value': 6997}, {'name': 'Amapá', 'value': 7127}, {'name': 'Alagoas', 'value': 8989}, {'name': 'Piauí', 'value': 10342}, {'name': 'Rondônia', 'value': 12256}, {'name': 'Maranhão', 'value': 14898}, {'name': 'Tocantins', 'value': 16257}, {'name': 'Acre', 'value': 16921}, {'name': 'Rio Grande do Norte', 'value': 19794}, {'name': 'Paraíba', 'value': 20710}, {'name': 'Amazonas', 'value': 24735}, {'name': 'Pará', 'value': 26823}, {'name': 'Ceará', 'value': 26834}, {'name': 'Mato Grosso', 'value': 39222}, {'name': 'Mato Grosso do Sul', 'value': 40836}, {'name': 'Pernambuco', 'value': 43077}, {'name': 'Espírito Santo', 'value': 70752}, {'name': 'Rio Grande do Sul', 'value': 182861}, {'name': 'Bahia', 'value': 242921}, {'name': 'Distrito Federal', 'value': 262762}, {'name': 'Goiás', 'value': 289250}, {'name': 'Rio de Janeiro', 'value': 310586}, {'name': 'Santa Catarina', 'value': 365769}, {'name': 'Paraná', 'value': 637489}, {'name': 'Minas Gerais', 'value': 1549669}, {'name': 'São Paulo', 'value': 1917412}],
        'chik': [{'name': 'Amapá', 'value': 195}, {'name': 'Amazonas', 'value': 242}, {'name': 'Roraima', 'value': 248}, {'name': 'Acre', 'value': 254}, {'name': 'Alagoas', 'value': 276}, {'name': 'Piauí', 'value': 666}, {'name': 'Rio Grande do Sul', 'value': 688}, {'name': 'Santa Catarina', 'value': 822}, {'name': 'Distrito Federal', 'value': 1029}, {'name': 'Paraná', 'value': 1361}, {'name': 'Maranhão', 'value': 1408}, {'name': 'Rondônia', 'value': 1424}, {'name': 'Sergipe', 'value': 1567}, {'name': 'Tocantins', 'value': 2615}, {'name': 'Paraíba', 'value': 3347}, {'name': 'Rio de Janeiro', 'value': 3817}, {'name': 'Pará', 'value': 3853}, {'name': 'Rio Grande do Norte', 'value': 4056}, {'name': 'Ceará', 'value': 5576}, {'name': 'Pernambuco', 'value': 8135}, {'name': 'Goiás', 'value': 8197}, {'name': 'Mato Grosso', 'value': 8862}, {'name': 'Espírito Santo', 'value': 13288}, {'name': 'São Paulo', 'value': 13947}, {'name': 'Bahia', 'value': 16285}, {'name': 'Mato Grosso do Sul', 'value': 20138}, {'name': 'Minas Gerais', 'value': 117925}],
        'zika': [{'name': 'Alagoas', 'value': 0}, {'name': 'Amapá', 'value': 0}, {'name': 'Mato Grosso', 'value': 0}, {'name': 'Piauí', 'value': 0}, {'name': 'Rio de Janeiro', 'value': 0}, {'name': 'Ceará', 'value': 1}, {'name': 'Mato Grosso do Sul', 'value': 2}, {'name': 'Rondônia', 'value': 2}, {'name': 'Goiás', 'value': 3}, {'name': 'Maranhão', 'value': 3}, {'name': 'Paraíba', 'value': 3}, {'name': 'Roraima', 'value': 4}, {'name': 'Sergipe', 'value': 4}, {'name': 'Pernambuco', 'value': 5}, {'name': 'Paraná', 'value': 5}, {'name': 'Pará', 'value': 6}, {'name': 'Acre', 'value': 7}, {'name': 'Amazonas', 'value': 7}, {'name': 'Distrito Federal', 'value': 7}, {'name': 'Santa Catarina', 'value': 11}, {'name': 'Rio Grande do Sul', 'value': 13}, {'name': 'Minas Gerais', 'value': 14}, {'name': 'Rio Grande do Norte', 'value': 19}, {'name': 'São Paulo', 'value': 20}, {'name': 'Tocantins', 'value': 60}, {'name': 'Bahia', 'value': 62}, {'name': 'Espírito Santo', 'value': 349}],
        'dengue_100k': [{'name': 'Maranhão', 'value': 12.17}, {'name': 'Roraima', 'value': 13.66}, {'name': 'Alagoas', 'value': 15.98}, {'name': 'Ceará', 'value': 16.68}, {'name': 'Sergipe', 'value': 17.57}, {'name': 'Piauí', 'value': 17.64}, {'name': 'Pará', 'value': 17.65}, {'name': 'Pernambuco', 'value': 26.46}, {'name': 'Paraíba', 'value': 28.54}, {'name': 'Rio Grande do Norte', 'value': 33.28}, {'name': 'Amazonas', 'value': 34.77}, {'name': 'Rondônia', 'value': 42.12}, {'name': 'Amapá', 'value': 51.14}, {'name': 'Tocantins', 'value': 57.01}, {'name': 'Mato Grosso', 'value': 57.58}, {'name': 'Mato Grosso do Sul', 'value': 80.06}, {'name': 'Rio Grande do Sul', 'value': 91.64}, {'name': 'Bahia', 'value': 92.06}, {'name': 'Espírito Santo', 'value': 98.88}, {'name': 'Rio de Janeiro', 'value': 103.85}, {'name': 'Acre', 'value': 113.29}, {'name': 'Goiás', 'value': 231.38}, {'name': 'São Paulo', 'value': 231.45}, {'name': 'Santa Catarina', 'value': 261.79}, {'name': 'Paraná', 'value': 299.24}, {'name': 'Minas Gerais', 'value': 415.47}, {'name': 'Distrito Federal', 'value': 499.35}],
        'chik_100k': [{'name': 'Amazonas', 'value': 0.34}, {'name': 'Rio Grande do Sul', 'value': 0.34}, {'name': 'Alagoas', 'value': 0.49}, {'name': 'Santa Catarina', 'value': 0.59}, {'name': 'Paraná', 'value': 0.64}, {'name': 'Piauí', 'value': 1.14}, {'name': 'Maranhão', 'value': 1.15}, {'name': 'Rio de Janeiro', 'value': 1.28}, {'name': 'Amapá', 'value': 1.4}, {'name': 'São Paulo', 'value': 1.68}, {'name': 'Acre', 'value': 1.7}, {'name': 'Distrito Federal', 'value': 1.96}, {'name': 'Roraima', 'value': 2.17}, {'name': 'Pará', 'value': 2.54}, {'name': 'Ceará', 'value': 3.47}, {'name': 'Sergipe', 'value': 3.94}, {'name': 'Paraíba', 'value': 4.61}, {'name': 'Rondônia', 'value': 4.89}, {'name': 'Pernambuco', 'value': 5.0}, {'name': 'Bahia', 'value': 6.17}, {'name': 'Goiás', 'value': 6.56}, {'name': 'Rio Grande do Norte', 'value': 6.82}, {'name': 'Tocantins', 'value': 9.17}, {'name': 'Mato Grosso', 'value': 13.01}, {'name': 'Espírito Santo', 'value': 18.57}, {'name': 'Minas Gerais', 'value': 31.62}, {'name': 'Mato Grosso do Sul', 'value': 39.48}],
        'zika_100k': [{'name': 'Alagoas', 'value': 0.0}, {'name': 'Amapá', 'value': 0.0}, {'name': 'Ceará', 'value': 0.0}, {'name': 'Mato Grosso', 'value': 0.0}, {'name': 'Piauí', 'value': 0.0}, {'name': 'Rio de Janeiro', 'value': 0.0}, {'name': 'Goiás', 'value': 0.01}, {'name': 'Maranhão', 'value': 0.01}, {'name': 'Minas Gerais', 'value': 0.01}, {'name': 'Mato Grosso do Sul', 'value': 0.01}, {'name': 'Pará', 'value': 0.01}, {'name': 'Paraíba', 'value': 0.01}, {'name': 'Pernambuco', 'value': 0.01}, {'name': 'Paraná', 'value': 0.01}, {'name': 'São Paulo', 'value': 0.01}, {'name': 'Rondônia', 'value': 0.02}, {'name': 'Rio Grande do Sul', 'value': 0.02}, {'name': 'Santa Catarina', 'value': 0.02}, {'name': 'Amazonas', 'value': 0.03}, {'name': 'Sergipe', 'value': 0.03}, {'name': 'Distrito Federal', 'value': 0.04}, {'name': 'Bahia', 'value': 0.07}, {'name': 'Rio Grande do Norte', 'value': 0.1}, {'name': 'Roraima', 'value': 0.11}, {'name': 'Acre', 'value': 0.14}, {'name': 'Tocantins', 'value': 0.63}, {'name': 'Espírito Santo', 'value': 1.46}],
      };

      var diseaseName = {
          'dengue': 'Dengue',
          'chik': 'Chikungunya',
          'zika': 'Zika'
      }

      var br_data = incidenceType === 'total_cases_100k_hab' ? diseaseDataMapping[disease + '_100k'] : diseaseDataMapping[disease];

      var total_cases_title = `Número total de casos de ${diseaseName[disease]} por estado em 2024`;
      var total_cases_100k_title = `${diseaseName[disease]} casos a cada 100mil hab. por estado em 2024`

      var map_title = (incidenceType === 'total_cases_100k_hab') ? total_cases_100k_title : total_cases_title;
      var chart_title = (incidenceType === 'total_cases_100k_hab') ? total_cases_100k_title : total_cases_title;
      var max_total_cases = br_data[0].value;
      var min_total_cases = br_data[br_data.length - 1].value;

      const mapOption = {
        width: '512px',
        height: '529px',
        grid: {
          top: '5%'
        },
        title: {
          text: map_title,
          left: 'center',
          padding: [20, 0, 0, 0]
        },
        visualMap: {
          left: 'right',
          min: min_total_cases,
          max: max_total_cases,
          type: 'continuous',
          inRange: {
            color: blueVioletPalette,
            opacity: 0.8
          },
          text: ['Alto', 'baixo'],
          calculable: true,
          orient: 'vertical',
          top: '25%',
          left: '80%',
        },
        series: [
          {
            id: 'total_cases',
            type: 'map',
            roam: true,
            mapType: 'BR',
            animationDurationUpdate: 1000,
            universalTransition: true,
            data: br_data,
            }
          ],
        };

      const barOption = {
        width: '80%',
        height: '80%',
        grid: {
          left: '10%',
          top: '10%'
        },
        title: {
          text: chart_title,
          left: 'center',
          padding: [20, 0, 0, 0],
          fontSize: 18,
        },
        visualMap: {
          left: 'right',
          type: 'piecewise',
          <!-- Impossible to use data value instead of dataIndex? -->
          min: 0,
          max: 26,
          inRange: {
            color: blueVioletPalette,
            opacity: 0.8
          },
          text: ['Alto', 'Baixo'],
          calculable: true,
          orient: 'vertical',
          top: '25%',
          left: '84%',
        },
        xAxis: {
          type: 'value',
          axisLabel: {
            fontSize: 14
          }
        },
        yAxis: {
          type: 'category',
          axisLabel: {
            rotate: 55, 
            interval: 0,
            fontSize: 13,
            padding: [0, 0, 0, 0], 
          },
          data: br_data.map(function (item) {
            return item.name;
          })
        },
        animationDurationUpdate: 1000,
        series: {
          type: 'bar',
          id: 'total_cases',
          data: br_data.map(function (item) {
            return item.value;
          }),
          label: {
            show: true,
            position: 'right',
            formatter: '{c}',
            fontSize: 13,
          },
          universalTransition: true
        },
        tooltip: {
          formatter: '{b}: {c} cases'
        },
        responsive: true,
        maintainAspectRatio: false
      };

      let isMap = true;

      myChart.setOption(mapOption);

      myChart.getZr().on('click', function (params) {
        isMap = !isMap;

        if (isMap) {
          myChart.setOption(mapOption);
        } else {
          myChart.setOption(barOption);
        }
      });

      window.addEventListener('resize', function () {
        myChart.resize();
      });
    });
  }
}

    $(document).ready(function () {
    initializeEChart("dengue", "total_cases");
    });
</script>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- eCharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js" type="text/javascript"></script>
    </body>
</html>
