"""Hello, wxPython! program."""

import wx

class Frame(wx.Frame):
    """Frame class that displays an image."""

    def __init__(self, image, parent=None, id=-1,
                 pos=wx.DefaultPosition, title='Hello, wxPython!'):
        """Create a Frame instance and display image."""
        wx.Frame.__init__(self, parent, id, title, pos)
        temp = image.ConvertToBitmap()
        size = temp.GetWidth(), temp.GetHeight()
        self.SetClientSize(size)
        self.bmp = wx.StaticBitmap(self, bitmap=temp)

class App(wx.App):
    """Application class."""

    def OnInit(self):
        image = wx.Image('wxPython.jpg')
        self.frame = Frame(image)
        self.frame.Show()
        self.SetTopWindow(self.frame)
        return True

def main():
    app = App()
    app.MainLoop()

if __name__ == '__main__':
    main()
