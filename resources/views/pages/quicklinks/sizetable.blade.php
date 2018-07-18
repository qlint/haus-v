@extends('main')
@section('title','Size Table')
@section('class','cms-page-view cms-tabele-rozmiarowe size-guide-page')
@section('content')

<div class="wrapper">
   <noscript>
      <div class="global-site-notice noscript">
         <div class="notice-inner">
            <p>
               <strong>JavaScript seems to be disabled in your browser.</strong><br />
               You must have JavaScript enabled in your browser to utilize the functionality of this website.                
            </p>
         </div>
      </div>
   </noscript>
   <div class="main-container">
      <div class="header-controls" id="headerControls">
         <span class="controls-container">
            <div class="breadcrumbs">
               <ul class="clearfix">
                  <li class="home">
                     <a href="{{ url('/') }}" title="Go to Home Page">Home</a>
                  </li>
                  <li class="cms_page">
                     <span title="Size tables - Haus Valeriaa">Size tables - Haus Valeriaa</span>
                  </li>
                  <li class="products-quantity hidden">
                     <span>Number of products:</span>
                     <span id="productsQuantity"></span>
                  </li>
               </ul>
            </div>
         </span>
      </div>

      @include('sidebar')

                  <section class="col-xs-9 content">
                     <div class="page-title">
                        <h1>Size guide</h1>
                     </div>
                     <div class="std">
                        <ul class="nav nav-tabs">
                           <li class="active"><a href="#tab1" data-toggle="tab"> Woman </a></li>
                           <li><a href="#tab2" data-toggle="tab"> Man </a></li>
                        </ul>
                        <div class="tab-content">
                           <div id="tab1" class="tab-pane active">
                              <!-- Start of Afro -->
                              <h1>African Women</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td><strong> Size </strong></td>
                                       <td>XS</td>
                                       <td>S</td>
                                       <td>M</td>
                                       <td>L</td>
                                       <td>XL</td>
                                       <td>PLUS</td>
                                    </tr>
                                    <tr>
                                       <td>African</td>
                                       <td>2-4</td>
                                       <td>6-8</td>
                                       <td>10-12</td>
                                       <td>14-16</td>
                                       <td>18-20</td>
                                       <td>22-24</td>
                                    </tr>
                                    <tr>
                                       <td>Bust</td>
                                       <td>34</td>
                                       <td>35</td>
                                       <td>36-40</td>
                                       <td>42-44</td>
                                       <td>46-48</td>
                                       <td>50-54</td>
                                    </tr>
                                    <tr>
                                       <td>Waist</td>
                                       <td>27</td>
                                       <td>29</td>
                                       <td>31</td>
                                       <td>34</td>
                                       <td>37</td>
                                       <td>40-43</td>
                                    </tr>
                                    <tr>
                                       <td>Hips</td>
                                       <td>37</td>
                                       <td>38</td>
                                       <td>39-42</td>
                                       <td>43-46</td>
                                       <td>47-50</td>
                                       <td>52-56</td>
                                    </tr>
                                    <tr>
                                       <td>Length</td>
                                       <td>58</td>
                                       <td>58</td>
                                       <td>58</td>
                                       <td>58</td>
                                       <td>58</td>
                                       <td>58</td>
                                    </tr>
                                    <tr>
                                       <td>Sleeves</td>
                                       <td>22</td>
                                       <td>23</td>
                                       <td>24</td>
                                       <td>25</td>
                                       <td>26</td>
                                       <td>27</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <p>* - African clothing, in general are designed to fit quite loosely and for maximum comfort. Unlike European designs that hug the body, African designs accentuate the natural beauty. By a judicious use of fabric and roomy designs, the clothes provide room for air circulation.<br>
                              * - Because of these design approach, African size-charts do not directly translate into European charts. For example, our Medium size corresponds to sizes 10 to 12. And so on.<br>
                              * - Bear in mind that African Fashions are meant to fit loose, therefore, the lower number will give you a better fit.</p>
                              <!-- End of Afro -->
                              <h1>Women's Tops</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td><strong> Size </strong></td>
                                       <td>XS</td>
                                       <td>S</td>
                                       <td>M</td>
                                       <td>L</td>
                                       <td>XL</td>
                                    </tr>
                                    <tr>
                                       <td>EUR</td>
                                       <td>34</td>
                                       <td>36</td>
                                       <td>38</td>
                                       <td>40</td>
                                       <td>42</td>
                                    </tr>
                                    <tr>
                                       <td>GB</td>
                                       <td>8</td>
                                       <td>10</td>
                                       <td>12</td>
                                       <td>14</td>
                                       <td>16</td>
                                    </tr>
                                    <tr>
                                       <td>US</td>
                                       <td>4</td>
                                       <td>6</td>
                                       <td>8</td>
                                       <td>10</td>
                                       <td>12</td>
                                    </tr>
                                    <tr>
                                       <td>Height</td>
                                       <td>164</td>
                                       <td>164</td>
                                       <td>170</td>
                                       <td>176</td>
                                       <td>176</td>
                                    </tr>
                                    <tr>
                                       <td>chest circumference</td>
                                       <td>84</td>
                                       <td>88</td>
                                       <td>92</td>
                                       <td>96</td>
                                       <td>100</td>
                                    </tr>
                                    <tr>
                                       <td>Waist</td>
                                       <td>64</td>
                                       <td>68</td>
                                       <td>72</td>
                                       <td>76</td>
                                       <td>80</td>
                                    </tr>
                                    <tr>
                                       <td>Hip circumference</td>
                                       <td>90</td>
                                       <td>94</td>
                                       <td>98</td>
                                       <td>102</td>
                                       <td>106</td>
                                    </tr>
                                    <tr>
                                       <td>arms</td>
                                       <td>38</td>
                                       <td>39</td>
                                       <td>40</td>
                                       <td>41</td>
                                       <td>42</td>
                                    </tr>
                                    <tr>
                                       <td>Length the sleeve</td>
                                       <td>58</td>
                                       <td>58</td>
                                       <td>60</td>
                                       <td>62</td>
                                       <td>62</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Women's pants /shorts /skirts</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td>Size</td>
                                       <td>XS</td>
                                       <td>S</td>
                                       <td>M</td>
                                       <td>L</td>
                                       <td>XL</td>
                                    </tr>
                                    <tr>
                                       <td>EUR</td>
                                       <td>34</td>
                                       <td>36</td>
                                       <td>38</td>
                                       <td>40</td>
                                       <td>42</td>
                                    </tr>
                                    <tr>
                                       <td>GB</td>
                                       <td>8</td>
                                       <td>10</td>
                                       <td>12</td>
                                       <td>14</td>
                                       <td>16</td>
                                    </tr>
                                    <tr>
                                       <td>US</td>
                                       <td>4</td>
                                       <td>6</td>
                                       <td>8</td>
                                       <td>10</td>
                                       <td>12</td>
                                    </tr>
                                    <tr>
                                       <td>Height</td>
                                       <td>164</td>
                                       <td>164</td>
                                       <td>170</td>
                                       <td>176</td>
                                       <td>176</td>
                                    </tr>
                                    <tr>
                                       <td>Waist</td>
                                       <td>64</td>
                                       <td>68</td>
                                       <td>72</td>
                                       <td>76</td>
                                       <td>80</td>
                                    </tr>
                                    <tr>
                                       <td>Hip circumference</td>
                                       <td>90</td>
                                       <td>94</td>
                                       <td>98</td>
                                       <td>102</td>
                                       <td>106</td>
                                    </tr>
                                    <tr>
                                       <td><span>LEG LENGHT</span></td>
                                       <td>80</td>
                                       <td>80</td>
                                       <td>82</td>
                                       <td>84</td>
                                       <td>84</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Women's jeans</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td>Size</td>
                                       <td>XXS</td>
                                       <td>XS</td>
                                       <td>S</td>
                                       <td>M</td>
                                       <td>L</td>
                                       <td>XL</td>
                                    </tr>
                                    <tr>
                                       <td>EUR</td>
                                       <td>32</td>
                                       <td>34</td>
                                       <td>36</td>
                                       <td>38</td>
                                       <td>40</td>
                                       <td>42</td>
                                    </tr>
                                    <tr>
                                       <td>GB</td>
                                       <td>6</td>
                                       <td>8</td>
                                       <td>10</td>
                                       <td>12</td>
                                       <td>14</td>
                                       <td>16</td>
                                    </tr>
                                    <tr>
                                       <td>US</td>
                                       <td>2</td>
                                       <td>4</td>
                                       <td>6</td>
                                       <td>8</td>
                                       <td>10</td>
                                       <td>12</td>
                                    </tr>
                                    <tr>
                                       <td>Height</td>
                                       <td>164</td>
                                       <td>164</td>
                                       <td>164</td>
                                       <td>170</td>
                                       <td>176</td>
                                       <td>176</td>
                                    </tr>
                                    <tr>
                                       <td>Waist</td>
                                       <td>60</td>
                                       <td>64</td>
                                       <td>68</td>
                                       <td>72</td>
                                       <td>76</td>
                                       <td>80</td>
                                    </tr>
                                    <tr>
                                       <td>Hip circumference</td>
                                       <td>86</td>
                                       <td>90</td>
                                       <td>94</td>
                                       <td>98</td>
                                       <td>102</td>
                                       <td>106</td>
                                    </tr>
                                    <tr>
                                       <td>length of sleeve</td>
                                       <td>80</td>
                                       <td>80</td>
                                       <td>80</td>
                                       <td>82</td>
                                       <td>84</td>
                                       <td>84</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Footwear</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="label-col"><strong> Size </strong></td>
                                       <td><strong> Cm </strong></td>
                                       <td><strong> Cal </strong></td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 36 </strong></td>
                                       <td>23</td>
                                       <td>4</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 37 </strong></td>
                                       <td>24</td>
                                       <td>4.5</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 38 </strong></td>
                                       <td>24.5</td>
                                       <td>5</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 39 </strong></td>
                                       <td>25</td>
                                       <td>5.5</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 40 </strong></td>
                                       <td>26</td>
                                       <td>6.5</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 41 </strong></td>
                                       <td>26.5</td>
                                       <td>7</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Belts</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="label-col"><strong> Size </strong></td>
                                       <td>S /M</td>
                                       <td>M /L</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> Length cm </strong></td>
                                       <td>72</td>
                                       <td>80</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col">&nbsp;</td>
                                       <td colspan="2">* - the length of the strap measured without buckles</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Women's Cap</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="label-col"><strong> Size </strong></td>
                                       <td>S /M</td>
                                       <td>M /L</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> Height </strong></td>
                                       <td>55</td>
                                       <td>57</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Socks</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="label-col"><strong> Size </strong></td>
                                       <td>35-38</td>
                                       <td>39-40</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> A </strong></td>
                                       <td>17</td>
                                       <td>19</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> B </strong></td>
                                       <td>5.5</td>
                                       <td>6</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> D </strong></td>
                                       <td>8</td>
                                       <td>8.5</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> F </strong></td>
                                       <td>7</td>
                                       <td>7.5</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div id="tab2" class="tab-pane">
                              <h1>Men's T-shirts, shirts, sweatshirts</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="label-col"><strong> Size </strong></td>
                                       <td><strong> Height </strong></td>
                                       <td><strong> Chest </strong></td>
                                       <td><strong> Length of sleeve </strong></td>
                                       <td><strong> arms </strong></td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> S </strong></td>
                                       <td>168</td>
                                       <td>88</td>
                                       <td>59</td>
                                       <td>43</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> M </strong></td>
                                       <td>174</td>
                                       <td>94</td>
                                       <td>61</td>
                                       <td>44</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> L </strong></td>
                                       <td>180</td>
                                       <td>100</td>
                                       <td>63</td>
                                       <td>45</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> XL </strong></td>
                                       <td>184</td>
                                       <td>106</td>
                                       <td>65</td>
                                       <td>46</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> XXL </strong></td>
                                       <td>188</td>
                                       <td>112</td>
                                       <td>67</td>
                                       <td>47</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Men's trousers</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td colspan="4">Size</td>
                                       <td>Height</td>
                                       <td>Waist</td>
                                       <td>Hips</td>
                                       <td>Debt. ext. legs</td>
                                    </tr>
                                    <tr>
                                       <td>30</td>
                                       <td>/30</td>
                                       <td>S</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>74</td>
                                       <td>92</td>
                                       <td>77</td>
                                    </tr>
                                    <tr>
                                       <td>30</td>
                                       <td>/32</td>
                                       <td>S</td>
                                       <td>STD</td>
                                       <td>168/188</td>
                                       <td>74</td>
                                       <td>92</td>
                                       <td>82</td>
                                    </tr>
                                    <tr>
                                       <td>30</td>
                                       <td>/34</td>
                                       <td>S</td>
                                       <td>LONG</td>
                                       <td>168/188</td>
                                       <td>74</td>
                                       <td>92</td>
                                       <td>87</td>
                                    </tr>
                                    <tr>
                                       <td>30</td>
                                       <td>/36</td>
                                       <td>S</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>74</td>
                                       <td>92</td>
                                       <td>92</td>
                                    </tr>
                                    <tr>
                                       <td>31</td>
                                       <td>/30</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>77</td>
                                       <td>95</td>
                                       <td>77</td>
                                    </tr>
                                    <tr>
                                       <td>31</td>
                                       <td>/32</td>
                                       <td>&nbsp;</td>
                                       <td>STD</td>
                                       <td>168/188</td>
                                       <td>77</td>
                                       <td>95</td>
                                       <td>82</td>
                                    </tr>
                                    <tr>
                                       <td>31</td>
                                       <td>/34</td>
                                       <td>&nbsp;</td>
                                       <td>LONG</td>
                                       <td>168/188</td>
                                       <td>77</td>
                                       <td>95</td>
                                       <td>87</td>
                                    </tr>
                                    <tr>
                                       <td>31</td>
                                       <td>/36</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>77</td>
                                       <td>95</td>
                                       <td>92</td>
                                    </tr>
                                    <tr>
                                       <td>32</td>
                                       <td>/30</td>
                                       <td>M</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>80</td>
                                       <td>98</td>
                                       <td>77</td>
                                    </tr>
                                    <tr>
                                       <td>32</td>
                                       <td>/32</td>
                                       <td>M</td>
                                       <td>STD</td>
                                       <td>168/188</td>
                                       <td>80</td>
                                       <td>98</td>
                                       <td>82</td>
                                    </tr>
                                    <tr>
                                       <td>32</td>
                                       <td>/34</td>
                                       <td>M</td>
                                       <td>LONG</td>
                                       <td>168/188</td>
                                       <td>80</td>
                                       <td>98</td>
                                       <td>87</td>
                                    </tr>
                                    <tr>
                                       <td>32</td>
                                       <td>/36</td>
                                       <td>M</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>80</td>
                                       <td>98</td>
                                       <td>92</td>
                                    </tr>
                                    <tr>
                                       <td>33</td>
                                       <td>/30</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>83</td>
                                       <td>101</td>
                                       <td>77</td>
                                    </tr>
                                    <tr>
                                       <td>33</td>
                                       <td>/32</td>
                                       <td>&nbsp;</td>
                                       <td>STD</td>
                                       <td>168/188</td>
                                       <td>83</td>
                                       <td>101</td>
                                       <td>82</td>
                                    </tr>
                                    <tr>
                                       <td>33</td>
                                       <td>/34</td>
                                       <td>&nbsp;</td>
                                       <td>LONG</td>
                                       <td>168/188</td>
                                       <td>83</td>
                                       <td>101</td>
                                       <td>87</td>
                                    </tr>
                                    <tr>
                                       <td>33</td>
                                       <td>/36</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>83</td>
                                       <td>101</td>
                                       <td>92</td>
                                    </tr>
                                    <tr>
                                       <td>34</td>
                                       <td>/30</td>
                                       <td>L</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>86</td>
                                       <td>104</td>
                                       <td>77</td>
                                    </tr>
                                    <tr>
                                       <td>34</td>
                                       <td>/32</td>
                                       <td>L</td>
                                       <td>STD</td>
                                       <td>168/188</td>
                                       <td>86</td>
                                       <td>104</td>
                                       <td>82</td>
                                    </tr>
                                    <tr>
                                       <td>34</td>
                                       <td>/34</td>
                                       <td>L</td>
                                       <td>LONG</td>
                                       <td>168/188</td>
                                       <td>86</td>
                                       <td>104</td>
                                       <td>87</td>
                                    </tr>
                                    <tr>
                                       <td>34</td>
                                       <td>/36</td>
                                       <td>L</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>86</td>
                                       <td>104</td>
                                       <td>92</td>
                                    </tr>
                                    <tr>
                                       <td>36</td>
                                       <td>/30</td>
                                       <td>XL</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>92</td>
                                       <td>110</td>
                                       <td>77</td>
                                    </tr>
                                    <tr>
                                       <td>36</td>
                                       <td>/32</td>
                                       <td>XL</td>
                                       <td>STD</td>
                                       <td>168/188</td>
                                       <td>92</td>
                                       <td>110</td>
                                       <td>82</td>
                                    </tr>
                                    <tr>
                                       <td>36</td>
                                       <td>/34</td>
                                       <td>XL</td>
                                       <td>LONG</td>
                                       <td>168/188</td>
                                       <td>92</td>
                                       <td>110</td>
                                       <td>87</td>
                                    </tr>
                                    <tr>
                                       <td>36</td>
                                       <td>/36</td>
                                       <td>XL</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>92</td>
                                       <td>110</td>
                                       <td>92</td>
                                    </tr>
                                    <tr>
                                       <td>38</td>
                                       <td>/30</td>
                                       <td>XXL</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>98</td>
                                       <td>116</td>
                                       <td>77</td>
                                    </tr>
                                    <tr>
                                       <td>38</td>
                                       <td>/32</td>
                                       <td>XXL</td>
                                       <td>STD</td>
                                       <td>168/188</td>
                                       <td>98</td>
                                       <td>116</td>
                                       <td>82</td>
                                    </tr>
                                    <tr>
                                       <td>38</td>
                                       <td>/34</td>
                                       <td>XXL</td>
                                       <td>LONG</td>
                                       <td>168/188</td>
                                       <td>98</td>
                                       <td>116</td>
                                       <td>87</td>
                                    </tr>
                                    <tr>
                                       <td>38</td>
                                       <td>/36</td>
                                       <td>XXL</td>
                                       <td>&nbsp;</td>
                                       <td>168/188</td>
                                       <td>98</td>
                                       <td>116</td>
                                       <td>92</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Men's Shoes</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="label-col"><strong> Size </strong></td>
                                       <td><strong> Cm </strong></td>
                                       <td><strong> Cal </strong></td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 41 </strong></td>
                                       <td>26.5</td>
                                       <td>7</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 42 </strong></td>
                                       <td>27</td>
                                       <td>8</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 43 </strong></td>
                                       <td>28</td>
                                       <td>9</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 44 </strong></td>
                                       <td>28.5</td>
                                       <td>10</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 45 </strong></td>
                                       <td>29</td>
                                       <td>10.5</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> 46 </strong></td>
                                       <td>30</td>
                                       <td>11.5</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>men's belt</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="label-col" colspan="2"><strong> Size </strong></td>
                                       <td>M</td>
                                       <td>L</td>
                                       <td>XL</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> Length cm </strong></td>
                                       <td>Webbing</td>
                                       <td>102</td>
                                       <td>121</td>
                                       <td>131</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> Length cm </strong></td>
                                       <td>Leather</td>
                                       <td>107</td>
                                       <td>126</td>
                                       <td>136</td>
                                    </tr>
                                    <tr>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td colspan="3">* - the length of the strap measured without buckles</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Men's cap (fullcap)</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="label-col"><strong> Size </strong></td>
                                       <td>S</td>
                                       <td>M</td>
                                       <td>L</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> Height </strong></td>
                                       <td>10.9</td>
                                       <td>11.8</td>
                                       <td>12.6</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> circuit </strong></td>
                                       <td>54</td>
                                       <td>57</td>
                                       <td>60</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Men's Cap</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="label-col"><strong> Size </strong></td>
                                       <td>M</td>
                                       <td>L</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> circuit </strong></td>
                                       <td>56</td>
                                       <td>59</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h1>Socks</h1>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="label-col"><strong> Size </strong></td>
                                       <td>39-42</td>
                                       <td>43-46</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> A </strong></td>
                                       <td>18</td>
                                       <td>20.5</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> B </strong></td>
                                       <td>5.5</td>
                                       <td>6.5</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> D </strong></td>
                                       <td>9</td>
                                       <td>9.5</td>
                                    </tr>
                                    <tr>
                                       <td class="label-col"><strong> F </strong></td>
                                       <td>8</td>
                                       <td>8.5</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </section>

   </div>
</div>

@include('customercare')

@endsection