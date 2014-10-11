@extends('layouts.default')

@section('title')
Edit Sales Invoice
@stop

@section('view')
<!-- To add a class to the form, set open() parameter as: ['route' => 'productsGrid.store', 'class' => '*class goes here*'] -->
{{ Form::open(['route' => ['salesGrid.update', $id], 'method' => 'PUT']) }}

<?php
$sales = Sales::find($id);
?>

{{ Form::label('cutomer_name', 'Customer Name') }}
{{ Form::text('customer_name', $sales->customer_name) }}

{{ Form::label('customer_contact', 'Contact Number') }}
{{ Form::input('tel', 'customer_contact', $sales->customer_contact) }}

<label>Item Orders</label>
<div id="dropdown_group">
    
</div>


<script type="text/javascript">
    
    
//    addDropdown(0);
    
    <?php
    
    $z = 0; // Some counter
    
    echo $sales->items;
    foreach($sales->items as $item) {
        
        echo 
        '
        addDropdown(' . $z++ . ', ' . $item->product_id . ', ' . $item->quantity . ', ' . $item->id . ');
        
        ';
    }
    
    ?>
    
    function deleteDropdown(i) {
        var deleteElement = document.getElementById(i);
        var delParent = deleteElement.parentElement;
        
        if(delParent) delParent.removeChild(deleteElement);        
    }
    
    /**
     * Add a new drop down list of all products grouped by product type sorted by brand
     */
    function addDropdown(i, product_id, qty, id) {
        
//        console.log(product_id);
        
        i++;
        
        var dropdownGroup = document.getElementById('dropdown_group');  // Div containing all dropdown elements.
        var dropdownDiv = document.createElement('div');    // Div containing individual dropdown elements.
        var dropdown = document.createElement('select');
//        dropdownGroup.setAttribute('id', i.toString());
        dropdownDiv.setAttribute('id', i.toString());
        dropdown.setAttribute('name', 'item[]');
//        dropdown.setAttribute('disabled', 'true');
        dropdownDiv.appendChild(dropdown);
        dropdownGroup.appendChild(dropdownDiv);
        
        // QTY INPUT
        var qtyInput = document.createElement('input');
        qtyInput.setAttribute('name', 'qty[]');
        qtyInput.setAttribute('type', 'number');
        qtyInput.setAttribute('value', qty == null ? 0 : qty);
        dropdownDiv.appendChild(qtyInput);
        
        // HIDDEN ID INPUT
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('name', '_id[]');
        hiddenInput.setAttribute('type', 'text');
        hiddenInput.setAttribute('hidden', true);
        hiddenInput.setAttribute('value', id == null ? 0 : id);
        dropdownDiv.appendChild(hiddenInput);
        
        // Buttons
        if(i == 1) {
            var addButton = document.createElement('a');
            var addText = document.createTextNode('+');
            addButton.setAttribute('onclick', 'addDropdown(' + i + ')');
            addButton.appendChild(addText);
            dropdownDiv.appendChild(addButton);
        }
        
        if(i > 1) {
            var delButton = document.createElement('a');
            var delText = document.createTextNode('-');
            delButton.setAttribute('onclick', 'deleteDropdown(' + i +')');
            delButton.appendChild(delText);
            dropdownDiv.appendChild(delButton);
        }
        
        
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
                    
                    // Echo script to 
                    // Create element <option>
                    // Set attribute value to product id
                    // Create text node brand->name + product->product_name
                    // Append text node to <option>
                    // Append <option> to optGroup+$i
                    
                    echo
                    '
                    var opt' . $x . ' = document.createElement("option");
                    opt' . $x . '.setAttribute("value", ' . $product->id . ');
                    if(product_id == ' . $product->id . ') opt' . $x . '.setAttribute("selected", "true");
                    
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