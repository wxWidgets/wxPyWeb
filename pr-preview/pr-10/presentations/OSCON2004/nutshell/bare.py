import wx

class App(wx.App):
    def OnInit(self):
        frame = wx.Frame(parent=None, title='Bare Frame')
        frame.Show()
        return True

app = App()
app.MainLoop()
