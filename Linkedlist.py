class Node:
	def __init__(self,data=None):
		self.data=data
		self.next=None




class LinkedList:
	def __init__(self):
		self.head = Node()

	def insertnode(self,data):
		newnode = Node(data)
		curr = self.head
		#while curr.next!=None:
			#curr = curr.next
		curr.next = newnode


			


test = LinkedList()
test.insertnode(1)
print(test.head.__dict__)
		
