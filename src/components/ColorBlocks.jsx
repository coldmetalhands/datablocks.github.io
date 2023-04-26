import React, { useEffect, useState } from "react"
import axios from 'axios';

function ColorBlocks() {
  const [colors, setColors] = useState([]);
  

  useEffect(()=>{
    async function loadColors(){
      const response = await fetch("http://localhost/colors/wp-json/wp/v2/color_blocks/");
      if(!response.ok){
        return;
      }
      const colors = await response.json();
      console.log(colors);
      setColors(colors);
    }
    loadColors();
  }, []);

  
    

    return(
      <div>
        {colors.map((color, index)=>(
          <h2 style={{ color:color.acf.color}} key={index}>{color.title.rendered}</h2>
        ))}
      </div>
    )
}

export default ColorBlocks