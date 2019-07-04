class Node{
    constructor(data=null){
        this.data=data;
        this.next=null
    }
}

class Linkedlist{
    constructor(){
        this.head = null;
        this.size=0;
    }

    insertdata(data){
        let newnode = new Node(data);
        let currentitem;
        if(this.head == null){
            this.head=newnode;
        }else{
            currentitem = this.head;
            while(currentitem.next){
                currentitem = currentitem.next;
            }
            currentitem.next = newnode;
        }
        
        //console.log(currentitem);
       
        //currentitem.next = newnode

    }
}

let list = new Linkedlist()
list.insertdata(2)
console.log(list)
