<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="CSS_folder/Tutorial_page.css">
    <link rel="stylesheet" href="CSS_folder/footer_style.css">
    <title>Document</title>
</head>
<body>
    <div class="background">
        <?php include('Page_header.php');?>
        <div class="topping">


            <!--Above don't touch -->
            <div class="course-title-num">
                <p class="unit-num">5.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Network in Graph Theory</i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>


        <div class="content_container">
            <div class="subtitle">
                <p>5.1 Network</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="350" src="https://www.youtube.com/embed/WRX7RJFdakw?si=cw3PLU5H8tSYVeUd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
            <div class="text">
                <p class="underline">
                    <strong>Relationaship between a network and a graph</strong>
                </p>
            </div>

            <div class="little_title">
                <p>Explanation</p>
            </div>
            <div class="text">
                <ul>
                    <li>A graph is used to represent data consisting of discrete objects and to show the relationaship between these objects in a simple graphical manner.</li>
                    <li>In a particular graph, a <strong>graph</strong> is interpreted as a series of dots which are either linked or not linked to one another by lines.</li>
                    <li>Each dots is known as a <strong>vertex</strong> and the line joining two vertices is known as an <strong>edge</strong>.</li>
                    <li>A graph is usually used to represent a certain <strong>network</strong>.</li>
                    <li>A network is part of graph with the vertices and edges having their own characteristics and the structure of network data has a many to many relation.</li>
                </ul>
                <p>A graph is denoted by a set of ordered pairs
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>G</mi><mo>=</mo><mo>(</mo><mi>V</mi><mo>,</mo><mi>E</mi><mo>)</mo></math>
                    where
                </p>
                <ul>
                    <li>V is the set of dots or vertices,
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>V</mi><mo>=</mo><msub><mi>v</mi><mn>1</mn></msub><mo>,</mo><msub><mi>v</mi><mn>2</mn></msub><mo>,</mo><msub><mi>v</mi><mn>3</mn></msub><mo>.</mo><mo>.</mo><mo>.</mo><mo>.</mo><msub><mi>v</mi><mi>n</mi></msub></math>
                    </li>
                    <li>E is the set of edges or line linking each pair of vertices</li>
                </ul>
                <p>The <strong>degree</strong>, d is the number of edges that connect two vertices.
                    <br>
                    The sum of degrees of graph is twice the number of edges that is
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2211;</mo><mi>d</mi><mo>(</mo><mi>v</mi><mo>)</mo><mo>=</mo><mn>2</mn><mi>E</mi></math> 
                </p>
                <p class="underline">
                    <strong>Simple graph</strong>
                </p>
                <ul>
                    <li>A simple graph has no loops and no multiple edges.</li>
                    <li>The sum of degress of the graph is twice the number of edges.</li>
                </ul>
                <p class="underline">
                    <strong>Multiple edges and loops of a graph</strong>
                </p>
                <p>
                    <strong>Multiple edges</strong>
                </p>
                <ul>
                    <li>Involve two vertices.</li>
                    <li>The vertices are connected by more than one edge.</li>
                    <li>The sum of degress is twice the number of edges.</li>
                </ul>
                <p>
                    <strong>Loops</strong>
                </p>
                <ul>
                    <li>Involve one vertex</li>
                    <li>The edge in the form of an arc that starts and ends at the same vertex.</li>
                    <li>Each loop adds 2 to the degree.</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <img src="math_image/math image4.png" alt="" class="chapter4_image">
                <p>
                    <strong>Differences between a directed graph and an undirected graph</strong>
                </p>
                <table class="table2">
                    <tr>
                        <th>Directed graph</th>
                        <th>Undirected graph</th>
                    </tr>
                    <tr>
                        <td>A type of graph that contains ordered pairs of vertices</td>
                        <td>A type of graph that contains unordered pairs of vertices</td>
                    </tr>
                    <tr>
                        <td>Edges represent the direction of vertexes</td>
                        <td>Edges do not represent the direction of vertexes</td>
                    </tr>
                    <tr>
                        <td>An arrow represent the edges</td>
                        <td>Undirected arcs represent the edges</td>
                    </tr>
                </table>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <img src="math_image/math image5.png" alt="" class="chapter4_image">
                <p>
                    <Strong>Differences between weighed graph and unweighed graphs</Strong>
                </p>
                <table class="table2">
                    <tr>
                        <th></th>
                        <th>Weighed praph</th>
                        <th>Unweighed graph</th>
                    </tr>
                    <tr>
                        <th>Type of graph</th>
                        <td>Directed graph and undirected graph</td>
                        <td>Directed graph and undirected graph</td>
                    </tr>
                    <tr>
                        <th>Edge</th>
                        <td>Associated with a value or a weight</td>
                        <td>Not associated with a value or a weight</td>
                    </tr>
                    <tr>
                        <th>Example</th>
                        <td>The edge represents :
                            <ul>
                                <li>distance between two cities</li>
                                <li>traveling time</li>
                                <li>the current in an electrical circuit</li>
                                <li>cost</li>
                            </ul>
                        </td>
                        <td>
                            The edge relates information like :
                            <ul>
                                <li>Job heirarchy in an arganisation</li>
                                <li>flow map</li>
                                <li>tree map</li>
                                <li>bubble map</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <P>
                    <strong>Subgraph</strong>
                </P>
            </div>

            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    A <strong>subgraph</strong> is a part  of a graph or the whole graph redrawn
                    <br>
                    without changing the original positions of the vertices and edges.
                </p>
                <p>A graph H is said to be a subgraph of G if,</p>
                <ul>
                    <li>the vertex set of graph H is a subset of the vertex ser of graph G that is
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>V</mi><mo>(</mo><mi>H</mi><mo>)</mo><mo>&#x2282;</mo><mi>V</mi><mo>(</mo><mi>G</mi><mo>)</mo></math>
                    </li>
                    <li>the edge set of graph H is a subset of the edge set of graph G that is
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>E</mi><mo>(</mo><mi>H</mi><mo>)</mo><mo>&#x2282;</mo><mi>E</mi><mo>(</mo><mi>G</mi><mo>)</mo></math>
                    </li>
                    <li>the vertex pairs of the edges of graph H are the same as the edges of grapg G</li>
                </ul>
                <p>A <strong>tree</strong> of a graph is a subgraph of the graph with the following properties</p>
                <ul>
                    <li>A simple graph without loops and multiple edges</li>
                    <li>All the vertices are connected and each pair of vertices is connected by only one edge</li>
                    <li>Number of edges = Number of vertices -1</li>
                    <li>Number of vertices =
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi></math>
                    </li>
                    <li>Number of edges =
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#x2212;</mo><mn>1</mn></math>
                    </li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example of subgraph</p>
            </div>
            <div class="text">
                <img src="math_image/math image6.png" alt="" class="chapter4_image">
                <p>
                    <strong>This is the example of Subgraph</strong>
                </p>
            </div>
        </div>


        <!-- go exercise button-->
        
        <div class="btn-conteiner">
            <a class="btn-content" href="Exercise_page.php">
              <span class="btn-title">Exercise</span>
              <span class="icon-arrow">
                <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                  </g>
                </svg>
              </span> 
            </a>
          </div>
          
          <?php include("footer.html")?>

    </div>
</body>
</html>