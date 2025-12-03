document.addEventListener('DOMContentLoaded', function(){
    document.getElementById('library-form').addEventListener('submit', addBook);
 
    function addBook(event) {
        event.preventDefault(); // Prevent form submission
 
        let bookTitle = document.getElementById('book-title').value;
        let bookYear = document.getElementById('pub_year').value;

        if (bookTitle === '' || !/^[a-zA-Z0-9\s!?,.;:'"\-]+$/.test(bookTitle)) {
           alert('Please enter a valid book title');
            return;
        }

        if(bookYear==='' || !/^\d{4}$/.test(bookYear) || bookYear < 1900 || bookYear > new Date().getFullYear()){
            alert('Please enter a valid publication date (between 1900 and current year)')
            return;
        }
    
        let row = document.createElement('tr');

        let titleCell = document.createElement('td');
        titleCell.textContent = bookTitle;
        row.appendChild(titleCell);

        let yearCell = document.createElement('td');
        yearCell.textContent = bookYear;
        row.appendChild(yearCell);

        if(bookYear < 2000){
            row.style.backgroundColor = 'lightgray';
        }
        else{row.style.backgroundColor = 'lightgreen'}

        document.querySelector('#book-list tbody').appendChild(row);

        document.getElementById('book-title').value = '';
        document.getElementById('pub_year').value = '';
    }
})

