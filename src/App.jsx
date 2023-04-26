import { useState, useEffect } from 'react'
import './sass/style.scss'
import axios from 'axios';
import ColorBlocks from './components/ColorBlocks';
import DataBlock from './components/DataBlock';

function App() {
  const [data, setData] = useState([]);
  

  useEffect(()=>{
    async function loadData(){
      const response = await fetch("http://localhost/colors/wp-json/wp/v2/data_blocks?order=asc");
      if(!response.ok){
        return;
      }
      const data = await response.json();
      
      setData(data);
    }
    loadData();
  }, []);

  function stripTags(index){
    let html = data[index].content.rendered;
    let div = document.createElement("div");
    div.innerHTML = html;
    let text = div.textContent || div.innerText || "";
    return text
  }
 
  return (
    <>
        {data.map((data, index)=>(
          
          <DataBlock key={index} title={data.title.rendered}>{stripTags(index)}</DataBlock>
        ))}
      <DataBlock>Hello.</DataBlock>
    </>
  )
}

export default App
