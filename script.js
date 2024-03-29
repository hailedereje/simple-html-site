// Using ES6 syntax
const ajax = new XMLHttpRequest();

ajax.onreadystatechange = function () {
  if (ajax.readyState == 4) {
    
    if (ajax.status == 200) { 
      const result = JSON.parse(ajax.responseText);
      console.log("Data fetched successfully:", result);
      
      document.getElementById('search-input').addEventListener('input', (e) => {
        
        const searchString = e.target.value.trim().toLowerCase();
        if (!searchString) return;

        const filteredItems = result.filter((item) => item.name.includes(searchString));
        items(filteredItems);

      });
      
    } else {
      console.error("Failed to fetch data. Status code:", ajax.status);
    }
  }
};

ajax.open("GET", "http://localhost:4000/php/public/", true);
ajax.send();

const items = (items) => {
  const list = document.getElementById("results");
  list.innerHTML = '';
  items.forEach((item) => {
    const li = document.createElement("li");
    li.innerText = item.name;
    list.appendChild(li);
  });
};
