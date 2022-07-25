class Library:
    def __init__(self, list_of_books):
        self.books = list_of_books

    def display_available_books(self):
        print("Books present in this library are:\n")
        for book in self.books:
            print(" # "+book)

    def issue_book(self, book_name):
        if book_name in self.books:
            print(
                f"{book_name} has been issued on your name, keep it safe and return within a MONTH!")
            self.books.remove(book_name)
            return True
        else:
            print("Sorry, this book is issued to someone else")
            return False

    def return_book(self, book_name):
        self.books.append(book_name)
        print("Thanks for returning this book")


class Student:
    def __init__(self,):
        pass

    def request_book(self):
        self.book = input("Enter the name of book you want to issue: ")
        return self.book

    def return_book(self):
        self.book = input("Enter the name of book you want to return or add: ")
        return self.book


# main
if __name__ == "__main__":
    Central_library = Library(["How to win friends and influence people",
                              "The Alchemist", "Da Vinci Code", "7 Habits of highly effective people"])
                              
    Central_library.display_available_books()
    student_obj = Student()
    while(True):
        Welcome_message = '''
        *****Welcome to Central Library*****
            Choose one of the following options:
            1.Display list of available books
            2.Issue a book
            3.Return/Add a books
            4.Exit the library
            '''
        print(Welcome_message)
        try:
            a = int(input("Enter your choice: "))
            if a == 1:
                Central_library.display_available_books()
            elif a == 2:
                Central_library.issue_book(student_obj.request_book())
            elif a == 3:
                Central_library.return_book(student_obj.return_book())
            elif a == 4:
                print("Thank you for choosing Central library keep reading :)")
                exit()
            else:
                print("Invalid Choice")
        except Exception as e:
            print("Enter Number corresponding to choice ")

