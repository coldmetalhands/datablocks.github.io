import React, { useEffect } from "react"

function DataBlock(props) {
  
  return (
    <div className="data-block">
      <h1 className="data-block__title">{props.title}</h1>
      {props.children}
    </div>
  )
}

export default DataBlock