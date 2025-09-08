<?php
/**
 * Template Name: Delivery
 * Description: A custom template to display the Delivery Information form.
 */

get_header();

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
 <div class="container">
        <div class="header">
            <h1>🚚 Delivery Information</h1>
            <p>Please fill in all required fields to process your delivery</p>
        </div>

        <div class="form-container">
            <form id="deliveryForm">
                <!-- Delivery Information Section -->
                <div class="form-section">
                    <h2 class="section-title">📝 Delivery Information</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="firstName">First Name <span class="required">*</span></label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name <span class="required">*</span></label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>


<div class="form-group">
    <label for="phone">Phone <span class="required">*</span></label>
      <input id="phone" type="tel" name="phoneNumber_display" required>
  <input type="hidden" name="phoneNumber" id="fullPhone"> <!-- Final value -->
</div>




                        <div class="form-group">
                            <label for="deliveryDate">Expected Delivery Date <span class="required">*</span></label>
                            <input type="date" id="deliveryDate" name="deliveryDate" required>
                        </div>
                    </div>
                </div>

                <!-- Billing Address Section -->
                <div class="form-section">
                    <h2 class="section-title">🏠 Billing Address</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="billingAddress1">Address Line 1 <span class="required">*</span></label>
                            <input type="text" id="billingAddress1" name="billingAddress1" required>
                        </div>
                        <div class="form-group">
                            <label for="billingAddress2">Address Line 2</label>
                            <input type="text" id="billingAddress2" name="billingAddress2">
                        </div>
                        <div class="form-group">
                            <label for="billingCountry">Country <span class="required">*</span></label>
                            <select id="billingCountry" name="billingCountry" required>
                                <option value="">Select your country</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Canada">Canada</option>
                                <option value="India" selected>India</option>
                                <option value="China">China</option>
                                <option value="Japan">Japan</option>
                                <option value="Germany">Germany</option>
                                <option value="France">France</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="billingCity">City <span class="required">*</span></label>
                            <input type="text" id="billingCity" name="billingCity" required>
                        </div>
                        <div class="form-group">
                            <label for="billingState">State</label>
                            <input type="text" id="billingState" name="billingState">
                        </div>
                        <div class="form-group">
                            <label for="billingPostalCode">Postal Code</label>
                            <input type="text" id="billingPostalCode" name="billingPostalCode">
                        </div>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="sameAsShipping" name="sameAsShipping">
                        <label for="sameAsShipping">Shipping Address same as billing address</label>
                    </div>
                </div>

                <!-- Shipping Address Section -->
                <div class="form-section" id="shippingSection">
                    <h2 class="section-title">📦 Shipping Address</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="shippingAddress1">Address Line 1</label>
                            <input type="text" id="shippingAddress1" name="shippingAddress1">
                        </div>
                        <div class="form-group">
                            <label for="shippingAddress2">Address Line 2</label>
                            <input type="text" id="shippingAddress2" name="shippingAddress2">
                        </div>
                        <div class="form-group">
                            <label for="shippingCountry">Country</label>
                            <select id="shippingCountry" name="shippingCountry">
                                <option value="">Select your country</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Canada">Canada</option>
                                <option value="India" selected>India</option>
                                <option value="China">China</option>
                                <option value="Japan">Japan</option>
                                <option value="Germany">Germany</option>
                                <option value="France">France</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="shippingCity">City</label>
                            <input type="text" id="shippingCity" name="shippingCity">
                        </div>
                        <div class="form-group">
                            <label for="shippingState">State</label>
                            <input type="text" id="shippingState" name="shippingState">
                        </div>
                        <div class="form-group">
                            <label for="shippingPostalCode">Postal Code</label>
                            <input type="text" id="shippingPostalCode" name="shippingPostalCode">
                        </div>
                    </div>
                </div>

                <!-- Item Table Section -->
                <div class="form-section">
                    <h2 class="section-title">📋 Item Details</h2>
                     <div class="table-responsive">
                    <table class="item-table" id="itemTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item Name <span class="required">*</span></th>
                                <th>Unit <span class="required">*</span></th>
                                <th>Qty <span class="required">*</span></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <select name="itemName[]" required>
                                        <option value="">Select Item</option>
                                        <option value="CBN">CBN</option>
                                        <option value="Product A">Product A</option>
                                        <option value="Product B">Product B</option>
                                        <option value="Product C">Product C</option>
                                        <option value="Product D">Product D</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="itemUnit[]" required>
                                        <option value="">Select Unit</option>
                                        <option value="Kg">Kg</option>
                                        <option value="Pcs">Pcs</option>
                                        <option value="Ltr">Ltr</option>
                                        <option value="Box">Box</option>
                                    </select>
                                </td>
                                <td><input type="number" name="itemQty[]" min="1" value="1"  oninput="this.value = this.value.replace(/[^0-9]/g, '')" required></td>
                                <td><button type="button" class="remove-btn" onclick="removeRow(this)">Remove</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <button type="button" class="add-item-btn" onclick="addRow()">+ Add Item</button>
                </div>

                <!-- Additional Options Section -->
                <div class="form-section">
                    <h2 class="section-title">⚙️ Additional Options</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="shippingOption">Shipping Option</label>
                            <select id="shippingOption" name="shippingOption">
                                <option value="">Select your option</option>
                                <option value="standard">Standard Shipping</option>
                                <option value="express">Express Shipping</option>
                                <option value="overnight">Overnight Shipping</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="customerRemarks">Customer Remark</label>
                            <textarea id="customerRemarks" name="customerRemarks" rows="4" placeholder="Enter your remarks, special instructions, or delivery preferences"></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-btn">🚀 Submit Order</button>
            </form>

            <div class="success-message" id="successMessage">
                <h3>✅ Order Submitted Successfully!</h3>
                <p>Your delivery information has been received and is being processed.</p>
            </div>

            <div class="data-display" id="dataDisplay">
                <h3>📊 Submitted Information</h3>
                <div id="submittedData"></div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var input = document.querySelector("#phone");
  var iti = window.intlTelInput(input, {
    initialCountry: "in",
    separateDialCode: true,
    onlyCountries: ["bd","us","gb","in","cn","jp","de","fr","au","ru"],
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
  });

  // On form submit → set hidden input value
input.addEventListener("input", function() {
  document.querySelector("#fullPhone").value = iti.getNumber();
});

// Also update on country change (when flag changes)
input.addEventListener("countrychange", function() {
  document.querySelector("#fullPhone").value = iti.getNumber();
});
});
</script>

<script>

$(document).ready(function () {
    $("#phone").on("input", function () {
        // Remove anything that is not a digit
        this.value = this.value.replace(/[^0-9]/g, '');
    });
});
</script>
    <script>
        let itemCounter = 1;

        // Handle same as billing address checkbox
        document.getElementById('sameAsShipping').addEventListener('change', function() {
            const shippingSection = document.getElementById('shippingSection');
            
            if (this.checked) {
                // Hide shipping section
                shippingSection.classList.add('hidden');
                
                // Copy billing address values to shipping fields
                const billingInputs = {
                    'billingAddress1': 'shippingAddress1',
                    'billingAddress2': 'shippingAddress2',
                    'billingCountry': 'shippingCountry',
                    'billingCity': 'shippingCity',
                    'billingState': 'shippingState',
                    'billingPostalCode': 'shippingPostalCode'
                };
                
                Object.keys(billingInputs).forEach(billingId => {
                    const billingField = document.getElementById(billingId);
                    const shippingField = document.getElementById(billingInputs[billingId]);
                    if (billingField && shippingField) {
                        shippingField.value = billingField.value;
                    }
                });
            } else {
                // Show shipping section
                shippingSection.classList.remove('hidden');
            }
        });

        // Add new item row
        function addRow() {
            itemCounter++;
            const tableBody = document.querySelector('#itemTable tbody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${itemCounter}</td>
                <td>
                    <select name="itemName[]" required>
                        <option value="">Select Item</option>
                        <option value="CBN">CBN</option>
                        <option value="Product A">Product A</option>
                        <option value="Product B">Product B</option>
                        <option value="Product C">Product C</option>
                        <option value="Product D">Product D</option>
                    </select>
                </td>
                <td>
                    <select name="itemUnit[]" required>
                        <option value="">Select Unit</option>
                        <option value="Kg">Kg</option>
                        <option value="Pcs">Pcs</option>
                        <option value="Ltr">Ltr</option>
                        <option value="Box">Box</option>
                    </select>
                </td>
                <td><input type="number" name="itemQty[]" min="1" value="1" required></td>
                <td><button type="button" class="remove-btn" onclick="removeRow(this)">Remove</button></td>
            `;
            tableBody.appendChild(newRow);
        }

        // Remove item row
        function removeRow(button) {
            const rows = document.querySelectorAll('#itemTable tbody tr');
            if (rows.length > 1) {
                button.closest('tr').remove();
                updateRowNumbers();
            } else {
                alert('At least one item is required!');
            }
        }

        // Update row numbers after removal
        function updateRowNumbers() {
            const rows = document.querySelectorAll('#itemTable tbody tr');
            rows.forEach((row, index) => {
                row.querySelector('td:first-child').textContent = index + 1;
            });
            itemCounter = rows.length;
        }

        // Auto-copy billing address when fields change (if checkbox is checked)
        const billingFields = ['billingAddress1', 'billingAddress2', 'billingCountry', 'billingCity', 'billingState', 'billingPostalCode'];
        billingFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field) {
                field.addEventListener('input', function() {
                    const checkbox = document.getElementById('sameAsShipping');
                    if (checkbox.checked) {
                        const shippingFieldId = fieldId.replace('billing', 'shipping');
                        const shippingField = document.getElementById(shippingFieldId);
                        if (shippingField) {
                            shippingField.value = this.value;
                        }
                    }
                });
            }
        });

        // Handle form submission
        document.getElementById('deliveryForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const data = {};
            
            // Collect form data
            for (let [key, value] of formData.entries()) {
                if (key.includes('[]')) {
                    const arrayKey = key.replace('[]', '');
                    if (!data[arrayKey]) data[arrayKey] = [];
                    data[arrayKey].push(value);
                } else {
                    data[key] = value;
                }
            }
            console.log(data);
            // Display success message
            document.getElementById('successMessage').style.display = 'block';
            
            // Display submitted data
            displaySubmittedData(data);
            
            // Scroll to results
            document.getElementById('dataDisplay').scrollIntoView({ behavior: 'smooth' });
        });

        // Display submitted data function
        function displaySubmittedData(data) {
            const dataDisplay = document.getElementById('dataDisplay');
            const submittedDataDiv = document.getElementById('submittedData');
            
            let html = '<div class="section-title">Personal Information</div>';
            
            // Personal Information
            html += `
                <div class="data-item">
                    <div class="data-label">Name:</div>
                    <div class="data-value">${data.firstName} ${data.lastName}</div>
                </div>
                <div class="data-item">
                    <div class="data-label">Email:</div>
                    <div class="data-value">${data.email}</div>
                </div>
                <div class="data-item">
                    <div class="data-label">Phone:</div>
                    <div class="data-value">${data.phoneNumber}</div>
                </div>
                <div class="data-item">
                    <div class="data-label">Delivery Date:</div>
                    <div class="data-value">${new Date(data.deliveryDate).toLocaleDateString()}</div>
                </div>
            `;
            
            // Billing Address
            html += '<div class="section-title" style="margin-top: 30px;">Billing Address</div>';
            html += `
                <div class="data-item">
                    <div class="data-label">Address:</div>
                    <div class="data-value">${data.billingAddress1}${data.billingAddress2 ? ', ' + data.billingAddress2 : ''}</div>
                </div>
                <div class="data-item">
                    <div class="data-label">Location:</div>
                    <div class="data-value">${data.billingCity}, ${data.billingState || ''} ${data.billingPostalCode || ''}, ${data.billingCountry}</div>
                </div>
            `;
            
            // Shipping Address (if different)
            if (!document.getElementById('sameAsShipping').checked) {
                html += '<div class="section-title" style="margin-top: 30px;">Shipping Address</div>';
                html += `
                    <div class="data-item">
                        <div class="data-label">Address:</div>
                        <div class="data-value">${data.shippingAddress1 || 'Not provided'}${data.shippingAddress2 ? ', ' + data.shippingAddress2 : ''}</div>
                    </div>
                    <div class="data-item">
                        <div class="data-label">Location:</div>
                        <div class="data-value">${data.shippingCity || ''}, ${data.shippingState || ''} ${data.shippingPostalCode || ''}, ${data.shippingCountry || ''}</div>
                    </div>
                `;
            } else {
                html += '<div class="section-title" style="margin-top: 30px;">Shipping Address</div>';
                html += `
                    <div class="data-item">
                        <div class="data-label">Address:</div>
                        <div class="data-value">Same as billing address</div>
                    </div>
                `;
            }
            
            // Items
            html += '<div class="section-title" style="margin-top: 30px;">Order Items</div>';
            if (data.itemName && data.itemName.length > 0) {
                data.itemName.forEach((item, index) => {
                    if (item) {
                        html += `
                            <div class="data-item">
                                <div class="data-label">Item ${index + 1}:</div>
                                <div class="data-value">${item} - ${data.itemQty[index]} ${data.itemUnit[index]}</div>
                            </div>
                        `;
                    }
                });
            }
            
            // Additional Options
            if (data.shippingOption || data.customerRemarks) {
                html += '<div class="section-title" style="margin-top: 30px;">Additional Information</div>';
                if (data.shippingOption) {
                    html += `
                        <div class="data-item">
                            <div class="data-label">Shipping Option:</div>
                            <div class="data-value">${data.shippingOption}</div>
                        </div>
                    `;
                }
                if (data.customerRemarks) {
                    html += `
                        <div class="data-item">
                            <div class="data-label">Remarks:</div>
                            <div class="data-value">${data.customerRemarks}</div>
                        </div>
                    `;
                }
            }
            
            submittedDataDiv.innerHTML = html;
            dataDisplay.style.display = 'block';
        }

        // Set minimum date to today
        document.getElementById('deliveryDate').min = new Date().toISOString().split('T')[0];
    </script>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            padding: 30px;
            text-align: center;
            color: white;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .header p {
            font-size: 1.2em;
            opacity: 0.9;
        }

        .form-container {
            padding: 40px;
        }

        .form-section {
            margin-bottom: 40px;
            padding: 30px;
            border: 2px solid #f0f2f5;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .form-section:hover {
            border-color: #4facfe;
            box-shadow: 0 5px 15px rgba(79, 172, 254, 0.1);
        }

        .form-section.hidden {
            display: none;
        }

        .section-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #4facfe;
            display: inline-block;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
            font-size: 0.95em;
        }

        .required {
            color: #e74c3c;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 12px 15px;
            border: 2px solid #e0e6ed;
            border-radius: 8px;
            font-size: 1em;
            transition: all 0.3s ease;
            background-color: #fafbfc;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #4facfe;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.1);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 20px 0;
        }

        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #4facfe;
        }

        .item-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .item-table th,
        .item-table td {
            padding: 15px;
            text-align: left;
            border: 1px solid #e0e6ed;
        }

        .item-table th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-weight: 600;
        }

        .item-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .item-table tr:hover {
            background-color: #e8f4f8;
        }

        .item-table input,
        .item-table select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .add-item-btn {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.9em;
            margin-top: 10px;
            transition: background 0.3s ease;
        }

        .add-item-btn:hover {
            background: #218838;
        }

        .remove-btn {
            background: #dc3545;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.85em;
            transition: background 0.3s ease;
        }

        .remove-btn:hover {
            background: #c82333;
        }

        .submit-btn {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 1.1em;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 20px;
            font-weight: 600;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(79, 172, 254, 0.3);
        }

        .phone-input {
            display: flex;
            gap: 10px;
        }

        .country-code {
            flex: 0 0 120px;
            display: flex;
            align-items: center;
            padding: 12px 10px;
            border: 2px solid #e0e6ed;
            border-radius: 8px;
            background-color: #fafbfc;
            font-size: 1em;
        }

        .country-code select {
            border: none;
            background: none;
            font-size: 1em;
            width: 100%;
            padding: 0;
        }

        .flag {
            margin-right: 8px;
            font-size: 1.2em;
        }

        .phone-number {
            flex: 1;
        }

        .success-message {
            display: none;
            background: #d4edda;
            color: #155724;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border: 1px solid #c3e6cb;
        }

        .data-display {
            display: none;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 12px;
            margin-top: 30px;
            border: 2px solid #e9ecef;
        }

        .data-display h3 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.4em;
        }

        .data-item {
            display: grid;
            grid-template-columns: 200px 1fr;
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
        }

        .data-label {
            font-weight: 600;
            color: #555;
        }

        .data-value {
            color: #333;
        }

        @media (max-width: 768px) {
            .container {
                margin: 10px;
            }
            
            .form-container {
                padding: 20px;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .phone-input {
                flex-direction: column;
            }
            
            .country-code {
                flex: 1;
            }
                  .item-table th,
      .item-table td {
        min-width: 150px;
      }

        }
    </style>
<?php
get_footer();
