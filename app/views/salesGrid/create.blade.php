@extends('layouts.default')

@section('title')
Add New Sales Invoice
@stop

@section('view')
<div><h2>Add New Product</h2></div>
<!-- To add a class to the form, set open() parameter as: ['route' => 'productsGrid.store', 'class' => '*class goes here*'] -->
<!--{{ Form::open(['route' => 'salesGrid.store', 'class' => 'pure-form pure-form-aligned']) }}-->

<div class="pure-control-group">
{{ Form::label('cutomer_name', 'Customer Name') }}
{{ Form::text('customer_name') }}
</div>

<div class="pure-control-group">
{{ Form::label('customer_contact', 'Contact Number') }}
{{ Form::input('tel', 'customer_contact') }}
</div>
    

<label>Item Orders</label>
<div id="dropdown_group">
    
</div>


<script type="text/javascript">
    
    
    addNewItemDropDown();
    
    /**
     * Add a new drop down list of all products grouped by product type sorted by brand
     */
    function addNewItemDropDown() {
        
        var dropdownGroup = document.getElementById('dropdown_group');  // Div containing all dropdown elements.
//        console.log(dropdownGroup);
        var dropdownDiv = document.createElement('div');    // Div containing individual dropdown elements.
        var dropdown = document.createElement('select');
        dropdown.setAttribute('name', 'item[]');
        dropdownDiv.appendChild(dropdown);
        dropdownGroup.appendChild(dropdownDiv);
        
        <?php
        
        $productTypes = ProductType::orderBy('description')->get();
        $brands = Brand::orderBy('name')->get();
        $i = 0; // Just some counter for the var names.
        
        // For each product type, echo the script to make an optgroup element and append it to the other elements.
        foreach($productTypes as $type) {    
            
            $i++;
            echo // Echo script to create groups for each product type.
            '
            var optGroup' . $i . ' = document.createElement("optgroup");
            optGroup' . $i . '.setAttribute("label", "' . $type->description . '");
            dropdown.appendChild(optGroup' . $i .');
            ';
            
            foreach($brands as $brand) {
                
                // Select products of each brand where product_type_id = $type->id
                $productsOfBrand = $brand->products()->orderBy('product_name')->where('product_type_id', '=', $type->id)->get();
                
                $x = 0; // Just some counter for var name
                
                foreach($productsOfBrand as $product) {
                    
                    $x++;
                    
//                     Echo script to 
//                     Create element <option>
//                     Set attribute value to product id
//                     Create text node brand->name + product->product_name
//                     Append text node to <option>
//                     Append <option> to optGroup+$i
                    
                    echo
                    '
                    var opt' . $x . ' = document.createElement("option");
                    opt' . $x . '.setAttribute("value", ' . $product->id . ');
                    
                    var prodName' . $x . '=document.createTextNode("'. $brand->name . ' ' . $product->product_name . '");
                    opt' . $x . '.appendChild(prodName' . $x . ');
                    
                    optGroup' . $i . '.appendChild(opt' . $x . ');
                    ';
                }
            }
        }
        
        ?>    
    }
</script>

{{ Form::submit('Save') }}

{{ Form::close() }}
@stop