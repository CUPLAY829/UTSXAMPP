$(document).ready(function() {
    // Create a DataTables instance
    var table = $('#myTable').DataTable({
      // ... your other DataTables options
    });
  
    // Define a custom render function to insert a box in a specific column (index 2)
    table.column(2).render(function(data, type, row) {
      if (type === 'display') { // Only affect how data is displayed
        return '<div class="custom-box">' + data + '</div>';
      } else {
        return data; // Return the original data for sorting/filtering
      }
    });
  });