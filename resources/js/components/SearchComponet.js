import React, { useEffect, useState} from 'react';
import ReactDOM from 'react-dom';

export default function HelloReact() {

    const [notes, getNotes] = useState('');

    useEffect(()=> {
        getNotes();
    },[])

    axios.get('/api/category').then( (data) => {
        const categories = data.data;
        });

    return (
       <div className='row'>
           <div className='col-6'>

           </div>
           <div className='col-6'>

           </div>
       </div>
    );
}

if (document.getElementById('hello-react')) {
    ReactDOM.render(<HelloReact />, document.getElementById('hello-react'));
}
